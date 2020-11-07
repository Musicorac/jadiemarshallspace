<!DOCTYPE html>
<html lang="en">
  <link href="pics/biopic.png" rel="shortcut icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="FlexSlider/flexslider.css" type="text/css">
  <script src="FlexSlider/jquery.flexslider.js"></script>
  <script src="myscripts.js"></script>
  <title>Projects and Experience</title>
  <meta name="description" content="Projects and work experience which Jadie Marshall has been involved in,
	including Agile and Scrum teams, Python, Web Development, and Saas projects.">
</head>
<body> 
<header  id="top">
	<?php include 'header.php';?>
</header>
<div class="body">
	<div class="top">
		<h1>Projects and Work Experience</h1>
	</div>
	
	<div class="jump">
		<img class="ji" src="pics/jump.jpg" alt="Arrow pointing down, indicating Projects below">
		<div class="wrapper">	
			<ul>
				<li><a href="projects.aspx?project=eng#eng"><img src="pics/imedx.png" alt="circular icon, symbol for heart beat"><p>Software Engineer Experience</p></a></li>
				<li><a href="projects.aspx?project=web#web"><img src="pics/web.png" alt="circular icon, symbol for web"><p>This Website</p></a></li>
				<li><a href="projects.aspx?project=listen#listen"><img src="pics/listen.png" alt="circular icon, headphones"><p>Rubble Listening Device</p></a></li>
				<li><a href="projects.aspx?project=saas#saas"><img src="pics/saas.png" alt="circular icon, sailboat"><p>Saas Sailing Inventory System</p></a></li>
				<li><a href="projects.aspx?project=dev#dev"><img src="pics/code.png" alt="circular icon, broken brackets"><p>/Web Developer Experience</p></a></li>
			</ul>
		</div>
	</div>

	<div class="project" id="eng">
		<div class="container">
			<h2>Software Engineer Experience</h2>
			<h3>iMedX Inc. (June 2020 - November 2020)</h3>
			
			<h3><button class="accordion">Duties and Responsibilities</button></h3>
			<div class="panel">
				<p>&emsp;I was a member of the US development team hired to develop iMedX's Analytics platform. The company's main software is found in medical transcription, and the Analytics
				platform is meant to improve the insight for healthcare clients into their billing and payment data. The existing analytics platform was written using the ASP.NET framework.
				Plans were in place for this to be eventually replaced by a React frontend, however, this was still in development when COVID-19 financial difficulties came to a head
				and this team was laid off and the supervisor reassigned. I was hired as an AI Software Engineer, with the goal of migration to using AWS tools and technologies to
				implement Machine Learning models on client data for better analytics predictions for our clients, specifically regarding the patterns and predictions that relate to
				clients' billing contracts with insurance companies. To this end, I was on a project to streamline our core databases and tables so they could be used in AWS "data lakes"
				which could later be used as a basis for the aforementioned Machine Learning models.
				
				<br /><br />&emsp;HIPAA training was part of my onboarding training for this position, as my role as a Software Engineer involved handling patient Personal Health
				Information, in some cases. While the bulk of our development and testing datasets had been previously de-identified, more robust datasets existed which had not
				been de-identified, as that process would remove some of the information that features needed to be tested upon. The de-identifed data is used for development primarily
				so that any accidental security issues made during development would not cause any possible compromise of PHI.
					
				<br><br>&emsp;Within this position, I had the opportunity to truly be a "full-stack" engineer, and was able work on portions of every aspect of the Analytics platform. 
				I had tasks that ranged from updating schemas of the underlying SQL tables, to creating and modifying stored procedures on SQL servers, to creating API frameworks for 
				different functions, to mid-level changes in the ASP.NET framework codebase, to making direct frontend experience changes. I also worked many tools while 
				performing these tasks, such as SQL Server Profiler, Visual Studio's Schema Compare, working within a remote desktop environment within a VPN network, Atlasssian's Jira,
				and Postman API Development Platform. 

				<br><br>&emsp;One of my major projects during my employment at iMedX was the creation of an Alerts system which would trigger alerts to be created for different triggers.
				These triggers would be checked each time that the dashboards which displayed the data relating to the alerts were refreshed. The call to the Alert Trigger stored procedure was
				added to the SQL Server Agent job which did the rebuilding of the financial dashboards. The stored procedure is run for each of the "active" databases within both the Development
				and Production servers. This procedure's parameters were the databasse name, the report type for which alerts are being created, and a list of the user roles for which the alert should
				be created. The stored procedure first collected the relevant financial columns from each of the dashboard Reporting tables. This data was then aggregated into sums, and after being 
				summed, the specific trigger-relevant rates were calculated. The string of user roles was split and used to compile a table column of usernames that would be recipients of any
				triggered alerts. A cursor was created to insert an alert row into the Alerts table for each of those usernames for each of the triggered alerts. This cursor was then deallocated.
				The next time one of that list of users logs into the Analytics portal, they would see new alerts corresponding to the ones created by this stored procedure.

				<br /><br />&emsp;For the Alerts systems project, I created Entity Framework mappings and API calls so that the frontend application could interact with the underlying Alerts table on
				the SQL Server. This allowed for the frontend to pull the alerts for the logged-in user, display and update the read/unread status of those alerts, and mark the alert "inactive". The
				marking inactive was a soft delete, as that record would still be in the underlying table for record-keeping, but not displayed to the user.

				<br /><br />&emsp;In this position, being self-motivated was a major advantage for my productivity, as the bulk of my work was self-paced and unsupervised due to being a mostly remote
				position. The local development team met at the datacenter locally once a week for a few hours, in order to get some in-person meeting time and work together on tasks that were better
				suited towards collaboration and pair programming rather than independent working.

				</p>
				<div class="up">
					<a href="#top">
						<img src="pics/up.png" title="Jump to top" alt="Jump to top">
						<div class="uTxt">Jump to Top</div>
					</a>
				</div>
			</div>
			
			<h3><button class="accordion">Languages and Skills</button></h3>
			<div class="panel">
				<ul>
					<li>ASP.NET Framework</li>
					<li>C#</li>
					<li>Visual Basic</li>
					<li>SQL/T-SQL</li>
					<li>SQL Server/SQL Server Management Studio</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>jQuery</li>
					<li>Source Control Techniques and Best Practices</li>
					<li>Legacy Code Updates</li>
					<li>Software Development and Design</li>
					<li>SQL Stored Procedure, Table, and General Schema Design and Updates</li>
					<li>Cooperation within a global team which was time-zone and continent separated</li>
				</ul>
				<div class="up">
					<a href="#top">
						<img src="pics/up.png" title="Jump to top" alt="Jump to top">
						<div class="uTxt">Jump to Top</div>
					</a>
				</div>
			</div>
			
		</div>
	</div><!--End of Software Engineering Experience-->

	<div class="project" id="web">
		<div class="container">
            <h2>This Website!</h2>

			<h3><button class="accordion">Project Information</button></h3>
            <div class="panel">
                <p>&emsp;This website was hand-written using HTML5, CSS3, PHP, and JavaScript. I own this domain and use Hostsinger as my hosting platform. This site is responsive, 
				as well as being cross-browser and mobile-friendly. Using the XAMPP software, which allows running an Apache web server on localhost, I tested for compatibility across 
				Google Chrome, Firefox, Safari, Microsoft Edge, and Internet Explorer. 
				<br><br>&emsp;Hand-coding this site allowed me to truly manipulate elements and their responses as I desired, rather than using a platform such as Wix or WordPress to manipulate 
				a platform’s limited selection of options and possibilities. The exception to this site being entirely written by me is the image gallery element used in this "Projects" page. 
				This element utilizes the Flexslider 2 jQuery plugin written by WooCommerce.
				<br><br>&emsp;I used a small JavaScript function to remove the CSS formatting from text copied from the pages. This was annoying to me as I copied back and forth to work on the wording 
				of various sections, as copying from the open site caused the background color to come with it. This script is activated on copy and replaces the clipboard data with plain text. This 
				does not affect the HTML formatting, so things such as newlines, breaks, and tabs are not lost. This script only removes CSS formatting (text color, background color, size, and font 
				family in this case), making copying and pasting across platforms much more streamlines.
				<br><br>&emsp; Each of the icons utilized are created from the editing of Creative Commons licensed clipart or icons into those that are used on the site. These are manipulated using GIMP, 
				a free, open-source alternative to Adobe Photoshop. Generally, a line art icon was selected, added over the mint green circle, and the line art either colored or made transparent, depending 
				on the need for that icon.
				</p>
				<div class="up">
					<a href="#top">
						<img src="pics/up.png" title="Jump to top" alt="Jump to top">
						<div class="uTxt">Jump to Top</div>
					</a>
				</div>				
            </div>
            <h3><button class="accordion">Languages and Skills</button></h3>
            <div class="panel">
                <ul>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>PHP</li>
					<li>jQuery</li>
					<li>Photoshop (equivalent) </li>
					<li>Web Design and Development</li>
					<li>Web Hosting</li>
					<li>SSL Encryption and Certification</li>
					<li>Domain Ownership</li>
				</ul>
				<div class="up">
					<a href="#top">
						<img src="pics/up.png" title="Jump to top" alt="Jump to top">
						<div class="uTxt">Jump to Top</div>
					</a>
				</div>
            </div>

			<h3><button class="accordion">More Examples</button></h3>
			<div class="panel">
				<div class="wrapper">
					<ul>
						<li><a href="https://github.com/Musicorac/jadiemarshallspace.git" target="_blank">
								<img src="pics/tools.png" alt="circular icon, git logo">
								<p>GitHub Repo (Opens in New Tab)</p></a>
						</li>
						<li><a href="quiz.aspx">
							<img src="pics/question.png" alt="ciruclar icon, question mark">
							<p>JavaScript Quiz Element</p></a>
						</li>
					</ul>
				</div>

				<div class="up">
					<a href="#top">
						<img src="pics/up.png" title="Jump to top" alt="Jump to top">
						<div class="uTxt">Jump to Top</div>
					</a>
				</div>
			</div>
		</div>

	</div><!--End of Website Project-->

	
	
	<div class="project" id="listen">
		<div class="container">
			<h2>Rubble Listening Device</h2>
			<h3>Course: Computer Systems Design</h3>
			
			<div class="slidewrapper">
				<div class="flexslider">
				<!--Flexslider created by WooCommerce -->
					<ul class="slides">
						<li>
						  <img src="pics/device.png" title="Listening device, top view" alt="Listening device, top view" />
						</li>
						<li>
						  <img src="pics/internal.jpg" title="SD card location, listening device." alt="internal view of listening device showing SD card location" />
						</li>
						<li>
						  <img src="pics/side.jpg" title="Listening device, side view" alt="Listening device, side view" />
						</li>
						<li>
						  <img src="pics/audioComp.png" title="Visual comparison of noise reduction." alt="comparison of audio files showing a reduction in noise" />
						</li>
					</ul>
				</div>
			</div>
			
			<h3><button class="accordion">Project Description</button></h3>
				<div class="panel">
					<p>&emsp;The professor who taught this course is part of a U.S. disaster relief team. This team is called in to respond to natural 
					disasters all over the country, assisting in the technology side of relief: piloting drones to see what is going on in an area that is 
					unsafe to send humans into, getting networks set up in the aftermath for relief workers to communicate using, and implementing new 
					technologies that improve disaster response, for example. 
					<br><br>&emsp;The class was presented with a list of projects that she and her team saw a need for in their experiences in these disaster 
					response situations. Students then “bid” upon projects that interested them or that they could best contribute to as a team member, outlining 
					what that person could bring to the team. My team was tasked with the creation of a device to "hear" survivors trapped under rubble. A very common 
					experience with survivors who are rescued from underneath rubble is that the survivor was yelling or banging on something, but nobody on the surface could hear them.
					<br><br>&emsp; The project requirements were: the device must be self-contained and self-reliant (many disaster situations have limited to no 
					wireless networks on which to rely on), the device must be able to be operated and handled by someone wearing "bunker gear" or similar 
					movement-restricting gear, the device must record for 5 minutes, then wait a user-selected interval before the next recording, and the device 
					must be able to last 12 hours on a single charge. 
					<br><br>&emsp;Our team used the ReSpeaker Core v2, which very similar to the board used in the Amazon Echo. This board's microphones have a small level of base noise 
					cancellation to begin with, which we used to our advantage in further noise cancellation. This board has an array of six microphones that we used to get a "full picture" 
					of the surrounding area's noise. We used a variation upon an existing Digital Signal Processing algorithm, with the addition of a Fourier transform performed to further 
					reduce the noise in the sound. Python was used for the entirety of this project, as it is natively compatible with the ReSpeaker, as well as being very lightweight in terms 
					of memory space needed. With such a small device, memory size is a concern to begin with, as well as wanting to reserve as much space as possible for recording files.
					<br><br>&emsp;For external controls, we used a single input button, as well as a power toggle switch. Additionally, an LED light on the top of the device was used to indicate 
					power status. Once powered on, the LED would light up green and the device would prompt the user to use this button to select the time interval between recordings. A choice 
					of 5, 10, 15, 30, or 60 minutes between recordings could be cycled through. This was done by pressing the button on the top of the device repeatedly, with the device audibly 
					voicing the selected interval. A long hold of the button confirmed the interval selection.  
					<br><br>&emsp;Once the interval was selected, the device would give a pre-recorded message informing anyone in hearing range that this device was powered on, that it would be 
					recording for the next five minutes to hear them and find them, and that they should shout or bang on metal after the message ended. The device would then commence its cycle 
					of recording and waiting, until the toggle switch was flipped, the SD card was filled, or the battery ran out. The pre-recorded message would play each time before recording audio. 
					Powering off the device while it was recording, or processing audio would cause the loss of that stage of the recording but would not cause a process lock to be active upon the 
					device’s next power up.
					<br><br>&emsp;After the device was retrieved from the site, an SD card with the recordings could then be removed. This SD card would then be inserted into a compatible device, 
					and human eyes and ears would be necessary to find the "spikes" in the audio files, listen to these, and determine if this spike was the result of a survivor, or just an anomaly 
					in the overall noise of the disaster site.
					<br><br>&emsp;Future work on this project would be to have a higher level of automation on the final sound files. Another script could be run which would be able to cut out and 
					timestamp these spikes, compiling them into an easier-to-digest file. This would reduce load on any human volunteer or worker, as they would only have to listen to the one file, 
					instead of searching a much larger file for the spikes which may or may not indicate a survivor.
					</p>
					
					<div class="up">
						<a href="#top">
							<img src="pics/up.png" title="Jump to top" alt="Jump to top">
							<div class="uTxt">Jump to Top</div>
						</a>
					</div>
					
				</div>
				
				<h3><button class="accordion">Languages and Skills</button></h3>
					<div class="panel">
						<ul>
							<li>Python</li>
							<li>Analog to Digital Conversion and Processing</li>
							<li>Use & Manipulation of Python libraries</li>
							<li>Hardware Input & Interactions</li>
							<li>Software Algorithms</li>
							<li>Project Bid Process</li>
							<li>Real-World Problem Experience</li>
							<li>Client Acceptance Testing</li>
							<li>Client presentation</li>
							<li>Project Time Budgeting (Gantt charts, recordkeeping)</li>
							<li>Technical Documentation (proposals, technical update reports, non-technical user's manual,
								technical programmer's manual, and final technical report)</li>
						</ul>
						<div class="up">
							<a href="#top">
								<img src="pics/up.png" title="Jump to top" alt="Jump to top">
								<div class="uTxt">Jump to Top</div>
							</a>
						</div>
					</div>
		</div>
	</div> <!--End of Rubble Listening Device Project-->
	
	<div class="project" id="saas">
		<div class="container">
			<h2>SaaS Sailing Inventory System</h2>
			<h3>Course: Software Engineering</h3>
			<div class="slidewrapper">
					<div class="flexslider long">
					<!--Flexslider created by WooCommerce -->
						<ul class="slides">
							<li>
							  <img src="pics/adminView.png" title="Inventory Admin View" alt="inventory system portal showing admin view"/>
							</li>
							<li>
							  <img src="pics/memberView.png" title="Inventory Member View" alt="Inventory system portal showing member view" />
							</li>
							<li>
							  <img src="pics/itemDetail.png" title="Inventory Item Detail" alt="Inventory system portal showing item detail" />
							</li>
							<li>
							  <img src="pics/signInUp.png" title="Inventory Sign In and Sign Up Views" alt="Inventory system portal showing sign in and sign up views" />
							</li>
						</ul>
					</div>
				</div>
				<form target="_blank">
					<h3><button class="accordion" type="submit" formaction="https://dry-island-56062.herokuapp.com/">Inventory Systems Demo (Opens in New Tab)</button></h3>
				</form>
				
			<h3><button class="accordion">Project Description</button></h3>
			<div class="panel">
				<p>&emsp;For this course, teams were challenged to find a client in the Bryan/College Station area, either a non-profit or organization. My team identified the Texas A&M Sailing 
				Team as a potential client. The Sailing Team had been relying upon a paper inventory system up to that point in time. The previous summer, the team's storage shed at Lake Bryan 
				had been broken into, which prompted a need to do a full inventory of the available equipment. Along with the larger items that were stolen or broken, the team found that many 
				small items that were checked out to individuals were missing (things such as oars and life jackets that were less likely to be stolen than the more expensive items). As a result 
				of these inventory discrepancies, the team was interested in moving to a new inventory system that would be easier to track inventory and who has checked out items than the paper system.
					<br><br>&emsp;The backend of this project was built in Ruby on Rails. This consisted of the inventory database itself and the admin vs member access rules. The frontend was a 
					web portal written using HTML, CSS, JavaScript, and PHP. The project was deployed to Heroku using their Git-linked deployment terminal- based toolkit.
					<br><br>&emsp;Our key features were: keeping track of inventory items and their status, adding, removing, and editing items to the database, sort the table on the web portal 
					side, having an Admin and Member views (so that Sailing team sponsors and officers were able to have more control over the inventory system than regular members), reporting 
					broken or missing items, and an email Admin notification system.   Our biggest struggle was in the email notification system. We were using an API for this purpose, but during 
					our testing, our automated test cases caused the API source to put a hold on the account for "suspicious activity". This was resolved, after contact with the API dev team.
					<br><br>&emsp;We restricted user signup to only allowing a new user to sign up as a member. Admin users have access to user management and can promote and demote users between 
					Admin and Member status. This does introduce a potential security issue in that there is no safeguard against a "troll" account demoting all Admin users but themselves. 
					This security flaw was stressed to our client, making clear that adding any Admin users should be done with extreme caution and the Admin “team” verifying that new account’s 
					information with the person they are promoting. Future work on this project would focus on patching this security hole first.
					<br><br>&emsp;The team utilized GitHub for source management. As team members contributed to the development of features, we would each create a fork off the main project for 
					each feature added. Testing and development were done on virtual machines, team members using a mix of Cloud9, AWS, and Windows Hyper-V virtual machines running Ubuntu. 
					Automated testing was run on each commit and merge, so that no new addition introduced bugs to previously functional code. We used Agile and Scrum methodologies for sprints 
					in this project, being able to deploy new features as soon as they could be tested. We used RSpec and Cucumber to run BDD tests, as well as running functionality tests by 
					interacting with the software in production and development environments. RSpec is a BDD testing tool written specifically for Ruby and Ruby on Rails. Cucumber allows the 
					writing of test cases to be more in "real English" for feedback, which makes it extremely helpful to see if the features we implemented fulfilled the stated needs of that feature.
					</p>
					<div class="up">
						<a href="#top">
							<img src="pics/up.png" title="Jump to top" alt="Jump to top">
							<div class="uTxt">Jump to Top</div>
						</a>
					</div>
			
			</div>
			
			<h3><button class="accordion">Languages and Skills</button></h3>
				<div class="panel">
					<ul>
						<li>Ruby on Rails</li>
						<li>SQL</li>
						<li>HTML</li>
						<li>CSS</li>
						<li>JavaScript</li>
						<li>Software as a System (SaaS)</li>
						<li>RSpec</li>
						<li>Cucumber</li>
						<li>Git/GitHub</li>
						<li>Heroku</li>
						<li>Agile Methodology</li>
						<li>Scrum Teams</li>
						<li>Iterative Development</li>
						<li>Behavioral Driven Development (BDD)Testing</li>
					</ul>
					
					<div class="up">
						<a href="#top">
							<img src="pics/up.png" title="Jump to top" alt="Jump to top">
							<div class="uTxt">Jump to Top</div>
						</a>
					</div>
				</div>
			
		</div>
	</div> <!--End of SAAS Project-->
	
	<div class="project" id="dev">
		<div class="container">
			<h2>Web Developer Experience</h2>
			<h3>Centennial Arts - (04/2019 - 09/2019)</h3>
			
			<h3><button class="accordion">Duties and Responsibilities</button></h3>
			<div class="panel">
				<p>&emsp;I developed software elements for use on customer websites, where I was responsible for creating new elements, bringing older elements into current standards, 
				and improving/documenting standards for use in the company’s proprietary software. This software was similar to Adobe Dreamweaver, but the company’s founder was 
				looking for things in an editor that weren’t given by Dreamweaver, so he wrote his own. This software was run in a web portal on the company’s internal software. 
				I was also responsible for meeting with the marketing and ad campaign staff members to ensure the website work that I was completing met all client needs and 
				expectations, as well as being ad campaign consistent and SEO-friendly. 
				<br><br>&emsp;These elements used HTML, CSS, JavaScript, and some PHP. The previous developer had hardcoded values into many elements, rather than leaving them 
				templated and letting the theme decide those values such as font family, text size, and text color. I would create new templated elements, removing these hardcoded 
				values and updating the HTML and CSS to the newest HTML5 and CSS3 standards. Within these older “bad” elements, many times CSS was contained in inline HTML rather 
				than being separated into its own file. This created problems if someone went to reuse an element with these inline formatting options, as inline formatting overrules any CSS file. 
				<br><br>&emsp;Another common problem was in the previous developer’s usage of jQuery. Rather than referencing the server’s jQuery library or even the online URL 
				to access jQuery, the developer would fill a JavaScript file with a “screenshot” of jQuery. This code hack would run the jQuery for that one element, but if you 
				tried to use that “screenshot” in a new copy for updating the element, it would no longer work. This code hack was extremely odd, and part of my responsibilities 
				became searching down elements using this tactic once it was discovered, as this is very out of industry standards and could introduce many issues. Ensuring this 
				was removed from production on any customer websites was one of my top priorities.
				<br><br>&emsp;Along with the creation of elements, I created CSS “themes” for use on websites that would handle the overall theme for a site. This included things such 
				as fonts, font sizes for different types of text, link text decoration, etc. Once this theme was created, it would apply over the top of the website containing templated 
				elements. These elements were created as templates so they would be reusable on any customer website, rather than re-creating elements every time they were needed. The 
				theme of the website was mostly decided by the client, with input from the web development team to ensure that the client is satisfied while also maintaining design standards and practices.
				<br><br>&emsp;The editor enforced certain standards in HTML, CSS, and JavaScript. One of the main functions of this was to restrict what CSS rules could be used, as 
				there are countless code hacks that can be done to manipulate formatting that do not fall into current (or any) standards. As I worked, things had been added to standards 
				or had not yet been added to the editor’s standard enforcement. As these came up, I would be responsible for documenting the new standards in the internal system, then 
				implementing the inclusion of that rule in the editor’s backend.
				</p>
				<div class="up">
					<a href="#top">
						<img src="pics/up.png" title="Jump to top" alt="Jump to top">
						<div class="uTxt">Jump to Top</div>
					</a>
				</div>
			</div>
			
			<h3><button class="accordion">Languages and Skills</button></h3>
			<div class="panel">
				<ul>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>jQuery</li>
					<li>PHP</li>
					<li>Client Meetings and Negotiations</li>
					<li>SEO Techniques and Best Practices</li>
					<li>Legacy Code Updates</li>
					<li>Web Development and Design</li>
				</ul>
				<div class="up">
					<a href="#top">
						<img src="pics/up.png" title="Jump to top" alt="Jump to top">
						<div class="uTxt">Jump to Top</div>
					</a>
				</div>
			</div>
			
		</div>
	</div>
	
</div>
<footer>
	<?php include 'footer.php';?>
</footer>
</body>
</html>