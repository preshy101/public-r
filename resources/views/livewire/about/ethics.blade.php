<div>
    @section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>About Us</h2>
					<ul class="bread-crumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
    <div class="container">
        <h1 class="entry-title"><a style="color: red" href="#"> {{($ethics != null )?$ethics->title:''}} </a></h1>
        <p class="lead">
         {{($ethics != null )?$ethics->description:''}}
        </p>
        <p> {!! ($ethics != null )?$ethics->fullText:'' !!}</p> 
        @if (!empty($ethics))
            <a target="_blank" href="{{url('docs/code_of_conduct.pdf')}}"> 
            <i class="fa fa-download"></i> Preview Document</a>
        @endif
        
    </div>
    <br>
    <br>
    <br> 
     
1.0	CONDUCT TOWARDS THE PRACTICE OF PUBLIC RELATIONS	 
A Member shall:  
Have a positive duty to observe the highest standards in the practice of Public Relations and to deal fairly and honestly with employers and clients (past and present), fellow members and professionals, the public relations profession, other professions, suppliers, intermediaries, the media of communications, employees and above all, the public	Expected standard of Public Relations practice
1.2	Be aware of, understand and observe this Code, any amendment to it,
and any other codes which shall be incorporated into it, remain up to
date with the content and recommendations of any guidance or
practice papers issued by the Nigerian Institute of Public Relations and have a duty to conform to good practice as expressed in such guidance or practice papers.	Up-to-date knowledge of developments in the profession
1.3	Uphold this Code and co-operate with fellow Members to enforce decisions on any matter arising from its application. A Member who.  knowingly causes or allows his or her staff to act in a manner inconsistent with the Code is party to such action and shall be deemed to be in breach of this Code. Staff employed by a Member who acts in a manner inconsistent with this Code should be disciplined by the Member.	Upholding the code


Vicarious liability of members
1.4	All disputes within the Institute must be resolved through the Internal machinery of the institute-namely, the State Chapter Executive Committees, the Investigating Panel and the Tribunal.	Reference adjudication of dispute
1.5	A Member shall not:                                                                                                           
Engage in any practice nor be seen to conduct him or herself in any manner detrimental to the reputation of the Institute or the reputation and interest of the public relations profession.	 
1.6	Issue unauthorized statement about the Institute to the media except the statement is authorized by the President                                         	Requirement of Presidents consent before publication of any statement
1.7	Circulate or disclose the content of any of the Council's Minutes of Meetings without the approval of the Council, the President or Vice President	Exposure of council's minutes, subject to approval
1.8	Bring the Institute, its officers or members to public ridicule.	 
1.9	Damage the professional reputation of the Institute, the officers of the Institute or its members.                    	 
2.	CONDUCT TOWARDS THE PUBLIC, THE MEDIA AND OTHER PROFESSIONALS	 
2.1	A Member shall:  
Conduct his or her professional activities with proper regard to the Public interest.	Scrutiny of information before dissemination
2.2	Have a positive duty at all times to respect the truth and shall not disseminate false or misleading information knowingly or recklessly and take proper care to check all information prior to its dissemination.	 
2.3	When working in association with other professionals, identify and respect the codes of those professions.
                                                                                  Respect for code of other professionals
2.4	Respect any statutory or regulatory codes laid down by any other authorities which are relevant to the actions of his or her employer or client, or taken on behalf of an employer or client	Respect for regulatory codes
2.5	Honour confidences received or given in the course of professional activity	 
2.6	Neither offer nor give, or cause an employer or client to give any Inducement to holders of Public office or members of any statutory body or organization who are not directors, executives or retained consultants, with intent to further the interests of the employer or client if such action is inconsistent with the public interest	Prohibition from inducement giving of
3	CONDUCT TOWARDS EMPLOYERS AND CLIENTS	 
A Member shall:
Safeguard the confidence of both present and former employers or clients; shall not disclose or use these confidences to the disadvantage or prejudice of such employers or clients, or to the financial advantage of the Member (unless the employer or clients has released such information for public use or has given specific permission for disclosure), except upon the order of a Court of law.	 
Safeguarding confidences
3.2	Be free to accept fees, commissions or other valuable considerations from persons other than an employer or client, if such considerations are disclosed to the employer or client.              	Acceptance of benefits subject to consent of employer.
3.3	Be free to negotiate or renegotiate with an employer or client terms that are a fair reflection of demands of the work involved and take into account factors other than hours worked and the experience involved. These special factors which are also applied by other professional advisers shall have regard to all the circumstances of the specific situation and in particular to:
a.	The complexity of the issue, ease, problem or assignment, and the difficulties associated with its completion.
b.	The professional or specialized skills required, and the degree of responsibility involved.
c.	The amount of documentation necessary to be perused or prepared and its importance.

d.	The place and circumstances where the work is carried out in whole or in part.
e.	The scope, scale and value of the task and its importance as an activity, issue or project to the employer or client.	Negotiation of remuneration
3.4	Charge fees when a client calls for proposals for an assignment, but the Member was not retained to execute the proposal	 
Member shall not:
Misuse information regarding his or her employer's or client's business for financial or other gain.	 
3.5	Serve an employer or client under terms or conditions which might impair his or her independence, objectivity or integrity	 
3.6	Represent conflicting interests but may represent competing interests with the express consent of the parties concerned.	Non-representation of conflicting interest
3.7	Guarantee the achievement of results which are beyond the members direct capacity to achieve or prevent	Making unrealistic promise
4	CONDUCT TOWARDS COLLEAGUES	 
4.1	A Member shall:
Adhere to the highest standards of accuracy and truth avoiding extravagant claims or unfair comparisons and giving credit for ideas and words borrowed from others.	Proficiency and recognition of the capabilities of others

4.2	Be free to represent his or her capabilities and service to any potential employer or client either on his or her own initiative or at the behest of any client, provided in so doing he or she does not seek to break any existing contract or detract from the reputation or capabilities of any member already serving that employer or client.	 
Representation

4.3	 
Member shall not: Injure the professional reputation or practice of another member.              	 

5	INTERPRETING THE CODE	Interpretation

5.1	In the interpretation of this Code, the decisions of the Investigating Panel and Disciplinary Tribunal set up by the Institute shall be final. A breach of the Code of Professional Conduct Bye-laws should be reported in writing to the Chairman of the Investigating Panel of the Institute. The Panel and Tribunal will carry out their functions as provided by Decree 16 of 1990.	 
Breach
Report of breach
Functions of Investigating Panel and Disciplinary Tribunal
5.2	 
A breach of the Code will earn reprimand suspension or expulsion from the Institute	Penalty for breach

    @endsection
 </div>