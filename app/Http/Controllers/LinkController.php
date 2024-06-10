<?php

namespace App\Http\Controllers;

use App\Models\Link;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(){

        $links = Link::latest()->paginate(10); // 10 items per page, adjust as necessary

        // Add metadata to the paginated links
        $links->getCollection()->transform(function ($link) {
            $metadata = $this->fetchOpenGraphMetadata($link->url);
            $link->thumbnail = $metadata['image'] ?? '/default-thumbnail.jpg';
            $link->title = $metadata['title'] ?? 'No Title';
            $link->description = $metadata['description'] ?? 'No Description';
            return $link;
        });

        return view('livewire.news.newslinks',  compact('links'));
    }

    private function fetchOpenGraphMetadata($url)
    {
        try {
            $client = new Client();
            $response = $client->get($url);
            $html = $response->getBody()->getContents();

            $crawler = new Crawler($html);
            $metaTags = $crawler->filter('meta[property^="og:"]');

            $metadata = [];
            foreach ($metaTags as $metaTag) {
                $property = $metaTag->getAttribute('property');
                $content = $metaTag->getAttribute('content');
                $metadata[$property] = $content;
            }

            return [
                'title' => $metadata['og:title'] ?? null,
                'description' => $metadata['og:description'] ?? null,
                'image' => $metadata['og:image'] ?? null,
            ];
        } catch (\Exception $e) {
            // Handle exceptions such as network errors
            return [
                'title' => null,
                'description' => null,
                'image' => null,
            ];
        }
    }

}
