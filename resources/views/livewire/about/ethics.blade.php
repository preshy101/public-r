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
						<li><a href="#">Code of Ethics</a></li>
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

        <table class="table table-bordered">
           <thead>
               <tr>
                <th><h3>1.0</h3> </th>
                <th><h3> CONDUCT TOWARDS THE PRACTICE OF PUBLIC RELATIONS</h3></th>
                <th> </th> 
            </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td><strong> A Member shall:  </strong>
                            Have a positive duty to observe the highest standards in the practice of Public Relations and to deal fairly and honestly with employers and clients (past and present), fellow members and professionals, the public relations profession, other professions, suppliers, intermediaries, the media of communications, employees and above all, the public
                            </td>
                        <td>
                            <strong>
                                Expected standard of Public Relations practice
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td>1.2</td>
                        <td>Be aware of, understand and observe this Code, any amendment to it,
                            and any other codes which shall be incorporated into it, remain up to
                            date with the content and recommendations of any guidance or
                            practice papers issued by the Nigerian Institute of Public Relations and have a duty to conform to good practice as expressed in such guidance or practice papers.
                            </td>
                        <td><strong>
                            Up-to-date knowledge of developments in the profession
                        </strong></td>
                    </tr>
                    <tr>
                        <td>1.3</td>
                        <td>Uphold this Code and co-operate with fellow Members to enforce decisions on any matter arising from its application. A Member who.  knowingly causes or allows his or her staff to act in a manner inconsistent with the Code is party to such action and shall be deemed to be in breach of this Code. Staff employed by a Member who acts in a manner inconsistent with this Code should be disciplined by the Member.</td>
                        <td><strong>
                            Upholding the code 
                            Vicarious liability of members
                            </strong></td>
                    </tr>
                    <tr>
                        <td>1.4</td>
                        <td>within the Institute must be resolved through the Internal machinery of the institute-namely, the State Chapter Executive Committees, the Investigating Panel and the Tribunal.</td>
                        <td><strong>
                            Reference adjudication of dispute
                        </strong></td>
                    </tr>
                    <tr>
                        <td>1.5</td>
                        <td>
                           <strong> Member shall not:  </strong>  <br>                                                                                                       
                            Engage in any practice nor be seen to conduct him or herself in any manner detrimental to the reputation of the Institute or the reputation and interest of the public relations profession.

                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.6</td>
                        <td>Issue unauthorized statement about the Institute to the media except the statement is authorized by the President  </td>
                        <td>
                            <strong>
                                Requirement of Presidents consent before publication of any statement
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td>1.7</td>
                        <td>disclose the content of any of the Council's Minutes of Meetings without the approval of the Council, the President or Vice President</td>
                        <td>
                            <strong>
                                Exposure of council's minutes, subject to approval
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td>1.8</td>
                        <td>Bring the Institute, its officers or members to public ridicule.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.9</td>
                        <td>Damage the professional reputation of the Institute, the officers of the Institute or its members.                    </td>
                        <td></td>
                    </tr>
                </tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                   </tr>
                <thead>
                    <th><h3> 2</h3></th>
                    <th><h3> CONDUCT TOWARDS THE PUBLIC, THE MEDIA AND OTHER PROFESSIONALS</h3></th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td> 2.1</td>
                        <td><strong>A Member shall: </strong>  
                            Conduct his or her professional activities with proper regard to the Public interest.
                            </td>
                        <td>Scrutiny of information before dissemination</td>
                    </tr>
                    <tr>
                        <td>2.2</td>
                        <td>Have a positive duty at all times to respect the truth and shall not disseminate false or 
                            misleading information knowingly or recklessly and take proper care to check all 
                            information prior to its dissemination.</td>
                        <td></td>
                    </tr>
                </tbody>
               </tr>
               <tr>
                <td>2.3</td>
                <td>working in association with other professionals, identify and respect the codes of those professions.</td>
                <td><strong>
                    Respect for code of other professionals    
                </strong></td>
               </tr>
               <tr>
                <td>2.4</td>
                <td>Respect any statutory or regulatory codes laid down by any other authorities which are relevant to the actions of his or her employer or client, or taken on behalf of an employer or client</td>
                <td>
                    <strong>
                        Respect for regulatory codes
                    </strong>
                </td>
               </tr>
               <tr>
                <td>2.5</td>
                <td>Honour confidences received or given in the course of professional activity</td>
                <td></td>
               </tr>
               <tr>
                <td>2.6</td>
                <td>Neither offer nor give, or cause an employer or client to give any Inducement to holders of Public office or members of any statutory body or organization who are not directors, executives or retained consultants, with intent to further the interests of the employer or client if such action is inconsistent with the public interest</td>
                <td>Prohibition from inducement giving of</td>
               </tr>
               <tr>
                <td></td>
                <td></td>
                <td></td>
               </tr>
               <thead>
                <th><h3>3</h3></th>
                <th><h3>
                    CONDUCT TOWARDS EMPLOYERS AND CLIENTS</h3></th>
                <th></th>
            </thead>
                <tbody>
                    <tr>
                        <td>3.1</td>
                        <td>
                             <strong> A Member shall:</strong>
                            Safeguard the confidence of both present and former employers or clients; shall not disclose or use these confidences to the disadvantage or prejudice of such employers or clients, or to the financial advantage of the Member (unless the employer or clients has released such information for public use or has given specific permission for disclosure), except upon the order of a Court of law.
                            </td>
                        <td>
                            <strong> 
                                Safeguarding confidences 
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td>3.2</td>
                    <td>Be free to accept fees, commissions or other valuable considerations from persons other than an employer or client, if such considerations are disclosed to the employer or client.              </td>
                    <td><strong>
                        Acceptance of benefits subject to consent of employer.    
                    </strong></td>
                </tr>
                <tr>
                    <td>3.3</td>
                    <td>
                        Be free to negotiate or renegotiate with an employer or client terms that are a fair 
                        reflection of demands of the work involved and take into account factors other than 
                        hours worked and the experience involved. These special factors which are also applied 
                        by other professional advisers shall have regard to all the circumstances of the specific 
                        situation and in particular to:
                        <ol type="a">
                            <li>
                              The complexity of the issue, ease, problem or assignment, and the difficulties associated with its completion.

                            </li>
                            <li>
                            	The professional or specialized skills required, and the degree of responsibility involved.

                            </li>
                            <li>
                            	The amount of documentation necessary to be perused or prepared and its importance.

                            </li>
                            <li>
                                The place and circumstances where the work is carried out in whole or in part.
                                
                            </li>
                            <li>
                                The scope, scale and value of the task and its importance as an activity, issue or project to the employer or client.

                            </li>
                        </ol>
                         
                        </td>
                    <td>
                        <strong>
                            Negotiation of remuneration
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>3.4</td>
                <td>client calls for proposals for an assignment, but the Member was not retained to execute the proposal</td>
                <td></td></tr>
                <tr>
                    <td></td>
                    <td>
                       <strong> Member shall not:</strong> <br>
                        Misuse information regarding his or her employer's or client's business for financial or other gain.
                        </td>
                    <td></td>
                </tr>
                <tr>
                    <td>3.5</td>
                    <td>Serve an employer or client under terms or conditions which might impair his or her independence, objectivity or integrity</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3.6</td>
                    <td>Represent conflicting interests but may represent competing interests with the express consent of the parties concerned.</td>
                    <td><strong>
                        Non-representation of conflicting interest    
                    </strong></td>
                </tr>
                <tr>
                    <td>3.7</td>
                    <td>Guarantee the achievement of results which are beyond the members direct capacity to achieve or prevent</td>
                    <td><strong>
                        Making unrealistic promise    
                    </strong></td>
                </tr>
                </tbody>
               
               <tr>
                <td></td>
                <td></td>
                <td></td>
               </tr>
               <thead>
                <th>4</th>
                <th>CONDUCT TOWARDS COLLEAGUES</th>
                <th></th>
               </thead>
               <tbody>
                <tr>
                <td>
                 4.1
                </td>
                <td> <strong> Member shall:</strong>
                    Adhere to the highest standards of accuracy and truth avoiding extravagant claims or 
                    unfair comparisons and giving credit for ideas and words borrowed from others. </td>
                <td>
                    <strong>
                        Proficiency and recognition of the capabilities of others
                    </strong>
                </td>
                </tr>
                <tr>
                    <td>4.2</td>
                    <td>represent his or her capabilities and service to any potential employer or client either on his or her own initiative or at the behest of any client, provided in so doing he or she does not seek to break any existing contract or detract from the reputation or capabilities of any member already serving that employer or client.</td>
                    <td><strong>Representation</strong></td>
                </tr>
                <tr>
                    <td>4.3</td>
                    <td><strong> Member shall not:</strong><br> Injure the professional reputation or practice of another member.              </td>
                    <td></td>
                </tr>
               </tbody>
           
               <tr>
                <td></td>
                <td></td>
                <td></td>
               </tr>
               <thead>
                <th>5</th>
                <th>INTERPRETING THE CODE</th>
                <th><strong>Interpretation</strong></th>
               </thead>
               <tbody>
                <tr>
                    <td>5.1</td>
                    <td>interpretation of this Code, the decisions of the Investigating Panel and Disciplinary 
                        Tribunal set up by the Institute shall be final. A breach of the Code of Professional 
                        Conduct Bye-laws should be reported in writing to the Chairman of the Investigating Panel 
                        of the Institute. The Panel and Tribunal will carry out their functions as provided by Decree 
                        16 of 1990.</td>
                    <td>
                        <strong>
                            Breach
                            Report of breach
                            Functions of Investigating Panel and Disciplinary Tribunal 
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>5.2</td>
                    <td>breach of the Code will earn reprimand suspension or expulsion from the Institute</td>
                    <td><strong>Penalty for breach</strong></td>
                </tr>
               </tbody>
        </table>
        @if (!empty($ethics))
            <a target="_blank" href="{{url('docs/code_of_conduct.pdf')}}"> 
            <i class="fa fa-download"></i> Preview Document</a>
        @endif
        
    </div>
    <br>
    <br>
    <br> 
   
    @endsection
 </div>