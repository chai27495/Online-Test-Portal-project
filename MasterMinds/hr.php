<?php
session_start();
if (!isset($_SESSION['username'])) { //not logged in

    //redirect to homepage
    header("Location: sign-in.html");
    die();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MasterMinds</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
     
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<style>
body {
        background-image: url("1902671.jpg");
} 
 
</style>

</head>

<body>

    
    <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">


                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"style="background-color:orange;color:black"> <font face="Comic sans MS" size="6"><b>HOME</b></font>
</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">APTITUDE</font><b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">
                            <li>
                                <a href="quantitative.php"><font face="Comic sans MS" size="3">QUANTITATIVE</font></a>
                            </li>
                            <li>
                                <a href="verbal-analysis.php"><font face="Comic sans MS" size="3">VERBAL</font></a>
                            </li>
                            <li>
                                <a href="logical-analysis.php"><font face="Comic sans MS" size="3">LOGICAL</font></a>
                            </li>
                            <li>
                                <a href="data-analysis.php"><font face="Comic sans MS" size="3">DATA ANALYSIS</font></a>
                            </li>
</ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">INTERVIEW </font><b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">
                            <li>
                                <a href="data-structures.php"><font face="Comic sans MS" size="3">TECHNICAL</font></a>
                            </li>
                            <li>
                                <a href="hr.php"><font face="Comic sans MS" size="3">HR</font></a>
                            </li>
<li>
                                <a href="group-discussions.php"><font face="Comic sans MS" size="3">GROUP DISCUSSION</font></a>
                            </li>

</ul>
 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">STUDY SOURCES</font> <b class="caret"></b></a>
<ul class="dropdown-menu"style="background-color:orange;color:black">
 <li class="dropdown"><a href="#" class="dropdown-toggle" data toggle="dropdown"><font face="Comic sans MS" size="3">IT/COMPUTERS </font><b class=""></b></a>
<ul class="dropdown dropdown-submenu">

                                    <li><a href="java.php"><font face="Comic sans MS" size="3">JAVA</font></a></li>
                                    <li><a href="database-systems.php"><font face="Comic sans MS" size="3">DBMS</font></a></li>
                                    <li><a href="data-structures-and-algorithms.php"><font face="Comic sans MS" size="3">DSA</font></a></li>
                                    <li><a href="computer-networks.php"><font face="Comic sans MS" size="3">CN</font></a></li>
<li><a href="operating-systems.php"><font face="Comic sans MS" size="3">OS</font></a></li>

</ul>
                            </li>
<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data toggle="dropdown dropdown-submenu"><font face="Comic sans MS" size="3">ELECTRONICS </font><b class=""></b></a>
                                <ul class="dropdown dropdown-submenu">
                                    <li><a href="very-large-scale-integration.php"><font face="Comic sans MS" size="3">VLSI DESIGN</font></a></li>
                                    <li><a href="digital-signal-processing.php"><font face="Comic sans MS" size="3">DSP</font></a></li>
                                    <li><a href="power-electronics.php"><font face="Comic sans MS" size="3">POWER ELECTRONICS</font></a></li>
                                    <li><a href="signals-and-systems.php"><font face="Comic sans MS" size="3">SIGNALS & SYSTEMS</font></a></li>
                                </ul>
                            </li>                              
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data toggle="dropdown dropdown-submenu"><font face="Comic sans MS" size="3">PRODUCTION</font> <b class=""></b></a>
                                <ul class="dropdown dropdown-submenu">
                                    <li><a href="som.php"><font face="Comic sans MS" size="3">SOM</font></a></li>
                                    <li><a href="tom.php"><font face="Comic sans MS" size="3">TOM</font></a></li>
                                    <li><a href="thermodynamics.php"><font face="Comic sans MS" size="3">THERMODYNAMICS&nbsp</font></a></li>
                                    <li><a href="fluid-mechanics.php"><font face="Comic sans MS" size="3">FLUID MECHANICS&nbsp</font></a></li>
                                </ul>
                            </li> 
</ul>  
</li>                
 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">TEST YOURSELF</font> <b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">


                            <li>
                                <a href="aptitude.php"><font face="Comic sans MS" size="3">APTITUDE</font></a>
                            </li>
                            <li>
                                <a href="functional-expertise.php"><font face="Comic sans MS" size="3">FUNCTIONAL EXPERTISE</font></a>
                            </li>
                            <li>
                                <a href="testall.php"><font face="Comic sans MS" size="3">ALL IN ONE</font></a>
                            </li>

                            
                        </ul>
                    </li>
<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">MISCELLANEOUS</font><b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">
                            <li>
                                <a href="company-rounds.php"><font face="Comic sans MS" size="3">COMPANY ROUNDS</font></a>
                            </li>
                            <li>
                                <a href="company-papers.php"><font face="Comic sans MS" size="3">COMPANY PAPERS</font></a>
                            </li>

                            <li>
                                <a href="rs-aggarwal.html"><font face="Comic sans MS" size="3">R.S.AGGARwAL</font></a>
                            </li>

</ul>
</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">MY ACCOUNT</font><b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">
                            
                            <li>
                                <a href="register.html"><font face="Comic sans MS" size="3">CHANGE PASSWORD</font></a>
                            </li>  
                            

                            <li>
                                <a href="my-progress.php"><font face="Comic sans MS" size="3">MY PROGRESS</font></a>
                            </li>  
                            <li>
                                <a href="logout.php"><font face="Comic sans MS" size="3">LOG OUT</font></a>
                            </li>  



                            </ul>
                            
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">HR
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">HOME</a>
                    </li>
                    <li class="active">HR QUESTIONS</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse">Tell me about yourself!</a>
                            </h4>
                        </div>
                        <div id="collapse" class="panel-collapse collapse">
                            <div class="panel-body"><p>
                                
TRAPS:  Beware, about 80% of all interviews begin with this innocent question. Many
candidates, unprepared for the question, skewer themselves by rambling, recapping their life
story, delving into ancient work history or personal matters. <br></br>
BEST ANSWER:  Start with the present and tell why you are well qualified for the position.
Remember that the key to all successful interviewing is to match your qualifications to what
the interviewer is looking for. In other words you must sell what the buyer is buying. This is
the single most important strategy in job hunting.  
So, before you answer this or any question it's imperative that you try to uncover your
interviewer's greatest need, want, problem or goal.  
To do so, make you take these two steps: 
<li> Do all the homework you can before the interview to uncover this person's wants and
needs (not the generalized needs of the industry or company) </li>
<li> As early as you can in the interview, ask for a more complete description of what the
position entails.  You might say: "I have a number of accomplishments I'd like to tell
you about, but I want to make the best use of our time together and talk directly to
your needs. To help me do, that, could you tell me more about the most important
priorities of this position?  All I know is what I (heard from the recruiter, read in the
classified ad, etc.)" </li>
<br></br>
 Then, ALWAYS follow-up with a second and possibly, third question, to draw out his needs
even more. Surprisingly, it's usually this second or third question that unearths what the
interviewer is most looking for.  
You might ask simply, "And in addition to that?..." or, "Is there anything else you see as
essential to success in this position?:  
This process will not feel easy or natural at first, because it is easier simply to answer
questions, but only if you uncover the employer's wants and needs will your answers make
the most sense. Practice asking these key questions before giving your answers, the process  will feel more natural and you will be light years ahead of the other job candidates you're
competing with.  
After uncovering what the employer is looking for, describe why the needs of this job bear
striking parallels to tasks you've succeeded at before. Be sure to illustrate with specific
examples of your responsibilities and especially your achievements, all of which are geared
to present yourself as a perfect match for the needs he has just described.  </p>                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">What are your strengths?</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                <p>                 
TRAPS:  This question seems like a softball lob, but be prepared. You don't want to come
across as egotistical or arrogant. Neither is this a time to be humble.  
<br></br>
BEST ANSWER:  You know that your key strategy is to first uncover your interviewer's
greatest wants and needs before you answer questions. And from Question 1, you know how
to do this.  
Prior to any interview, you should have a list mentally prepared of your greatest strengths.
You should also have, a specific example or two, which illustrates each strength, an example
chosen from your most recent and most impressive achievements. 
You should, have this list of your greatest strengths and corresponding examples from your
achievements so well committed to memory that you can recite them cold after being shaken
awake at 2:30AM.  
Then, once you uncover your interviewer's greatest wants and needs, you can choose those
achievements from your list that best match up.  
As a general guideline, the 10 most desirable traits that all employers love to see in their
employees are: 
<li>
A proven track record as an achiever...especially if your achievements match up
with the employer's greatest wants and needs. </li>
<li> Intelligence...management "savvy".</li>
<li> Honesty...integrity...a decent human being.</li>  
<li> Good fit with corporate culture...someone to feel comfortable with...a team player
who meshes well with interviewer's team. </li>
<li> Likeability...positive attitude...sense of humor.</li>
<li> Good communication skills.</li>
<li> Dedication...willingness to walk the extra mile to achieve excellence.</li>
<li> Definiteness of purpose...clear goals.</li>
<li> Enthusiasm...high level of motivation.</li>
<li> Confident...healthy...a leader. </li>
</p>                           </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What are your weaknesses?</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
<p>                            
TRAPS:  Beware - this is an eliminator question, designed to shorten the candidate list. Any admission of a weakness or fault will earn you an "A" for honesty, but an "F" for the interview.<br></br>  
PASSABLE ANSWER:  Disguise a strength as a weakness.  
Example: "I sometimes push my people too hard.  I like to work with a sense of urgency and
everyone is not always on the same wavelength." 
Drawback:  This strategy is better than admitting a flaw, but it's so widely used, it is
transparent to any experienced interviewer.  <br></br>
BEST ANSWER:  (and another reason it's so important to get a thorough description of your
interviewer's needs before you answer questions): Assure the interviewer that you can think
of nothing that would stand in the way of your performing in this position with excellence.
Then, quickly review you strongest qualifications.  
Example:  "Nobody's perfect, but based on what you've told me about this position, I believe
I' d make an outstanding match. I know that when I hire people, I look for two things most of
all. Do they have the qualifications to do the job well, and the motivation to do it well? 
Everything in my background shows I have both the qualifications and a strong desire to
achieve excellence in whatever I take on. So I can say in all honesty that I see nothing that
would cause you even a small concern about my ability or my strong desire to perform this
job with excellence."
Alternate strategy (if you don't yet know enough about the position to talk about such a
perfect fit): 
Instead of confessing a weakness, describe what you like most and like least, making sure that
what you like most matches up with the most important qualification for success in the
position, and what you like least is not essential.  
Example:  Let's say you're applying for a teaching position.“If given a choice, I like to spend
as much time as possible in front of my prospects selling, as opposed to shuffling paperwork
back at the office.  Of course, I long ago learned the importance of filing paperwork properly,
and I do it conscientiously. But what I really love to do is sell (if your interviewer were a
sales manager, this should be music to his ears.)
 </p>                             </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Why should I hire you? </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
TRAPS:  Believe it or not, this is a killer question because so many candidates are
unprepared for it.  If you stammer or adlib you’ve blown it. <br></br>
BEST ANSWER:  By now you can see how critical it is to apply the overall strategy of
uncovering the employer’s needs before you answer questions.  If you know the employer’s
greatest needs and desires, this question will give you a big leg up over other candidates
because you will give him better reasons for hiring you than anyone else is likely to…reasons
tied directly to his needs. 
Whether your interviewer asks you this question explicitly or not, this is the most important
question of your interview because he must answer this question favorably in is own mind
before you will be hired.  So help him out!  Walk through each of the position’s requirements
as you understand them, and follow each with a reason why you meet that requirement so
well. 
Example:  “As I understand your needs, you are first and foremost looking for someone who
can manage the sales and marketing of your book publishing division.  As you’ve said you
need someone with a strong background in trade book sales.  This is where I’ve spent almost
all of my career, so I’ve chalked up 18 years of experience exactly in this area.  I believe that
I know the right contacts, methods, principles, and successful management techniques as well
as any person can in our industry.” 
“You also need someone who can expand your book distribution channels. In my prior post,
my innovative promotional ideas doubled, then tripled, the number of outlets selling our
books.  I’m confident I can do the same for you.”                             </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Where do you see yourself five years from now? </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  One reason interviewers ask this question is to see if you’re settling for this
position, using it merely as a stopover until something better comes along.  Or they could be
trying to gauge your level of ambition. 
If you’re too specific, i.e., naming the promotions you someday hope to win, you’ll sound
presumptuous.  If you’re too vague, you’ll seem rudderless. <br></br>
BEST ANSWER:   Reassure your interviewer that you’re looking to make a long-term
commitment…that this position entails exactly what you’re looking to do and what you do
extremely well.  As for your future, you believe that if you perform each job at hand with
excellence, future opportunities will take care of themselves. 
Example:  “I am definitely interested in making a long-term commitment to my next position. 
Judging by what you’ve told me about this position, it’s exactly what I’m looking for and
what I am very well qualified to do.  In terms of my future career path, I’m confident that if I
do my work with excellence, opportunities will inevitable open up for me.  It’s always been
that way in my career, and I’m confident I’ll have similar opportunities here.”
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Why do you want to work at our company? </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
TRAPS:  This question tests whether you’ve done any homework about the firm.  If you
haven’t, you lose.  If you have, you win big. <br></br>
BEST ANSWER:   This question is your opportunity to hit the ball out of the park, thanks to
the in-depth research you should do before any interview. 
Best sources for researching your target company:  annual reports, the corporate newsletter,
contacts you know at the company or its suppliers, advertisements, articles about the
company in the trade press.                             </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Would you lie for the company? </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  This another question that pits two values against one another, in this case loyalty
against integrity. <br></br>
BEST ANSWER:  Try to avoid choosing between two values, giving a positive statement
which covers all bases instead. 
Example:  “I would never do anything to hurt the company..” 
If aggressively pressed to choose between two competing values, always choose personal
integrity.  It is the most prized of all values.                             </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Can you work under pressure?</a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  An easy question, but you want to make your answer believable.<br></br>
BEST ANSWER:  Absolutely…(then prove it with a vivid example or two of a goal or
project accomplished under severe pressure.)                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What makes you angry?</a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  You don’t want to come across either as a hothead or a wimp. <br></br> 
BEST ANSWER:    Give an answer that’s suited to both your personality and the
management style of the firm.  Here, the homework you’ve done about the company and its
style can help in your choice of words. 
Examples:  If you are a reserved person and/or the corporate culture is coolly professional: 
“I’m an even-tempered and positive person by nature, and I believe this helps me a great deal
in keeping my department running smoothly, harmoniously and with a genuine esprit de
corps.  I believe in communicating clearly what’s expected, getting people’s commitment to
those goals, and then following up continuously to check progress.” 
“If anyone or anything is going off track, I want to know about it early.  If, after that kind of
open communication and follow up, someone isn’t getting the job done, I’ll want to know
why.  If there’s no good reason, then I’ll get impatient and angry…and take appropriate steps
from there.  But if you hire good people, motivate them to strive for excellence and then
follow up constantly, it almost never gets to that state.” 
If you are feisty by nature and/or the position calls for a tough straw boss. 
“You know what makes me angry?  People who (the fill in the blanks with the most
objectionable traits for this type of position)…people who don’t pull their own weight, who
are negative, people who lie…etc.”                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">What was the toughest decision you ever had to make?</a>
                            </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  Giving an unprepared or irrelevant answer. <br></br>
BEST ANSWER:  Be prepared with a good example, explaining why the decision was
difficult…the process you followed in reaching it…the courageous or effective way you
carried it out…and the beneficial results.                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">How do you feel about working nights and weekends?</a>
                            </h4>
                        </div>
                        <div id="collapseTen" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  Blurt out “no way, Jose” and you can kiss the job offer goodbye.  But what if you
have a family and want to work a reasonably normal schedule?  Is there a way to get both the
job and the schedule you want? <br></br>
BEST ANSWER:  First, if you’re a confirmed workaholic, this question is a softball lob. 
Whack it out of the park on the first swing by saying this kind of schedule is just your style. 
Add that your family understands it.  Indeed, they’re happy for you, as they know you get
your greatest satisfaction from your work. 
If however, you prefer a more balanced lifestyle, answer this question with another:  “What’s
the norm for your best people here?” 
If the hours still sound unrealistic for you, ask, “Do you have any top people who perform
exceptionally for you, but who also have families and like to get home in time to see them at
night?”  Chances are this company does, and this associates you with this other “topperformers-who-leave-not-later-than-six”
group.

Depending on the answer, be honest about how you would fit into the picture.  If all those
extra hours make you uncomfortable, say so, but phrase your response positively. 
Example:  “I love my work and do it exceptionally well.  I think the results speak for
themselves, especially in …(mention your two or three qualifications of greater interest to the
employer.  Remember, this is what he wants most, not a workaholic with weak credentials). 
Not only would I bring these qualities, but I’ve built my whole career on working not just
hard, but smart.  I think you’ll find me one of the most productive people here. 
I do have a family who likes to see me after work and on weekends.  They add balance and
richness to my life, which in turn helps me be happy and productive at work.  If I could
handle some of the extra work at home in the evenings or on weekends, that would be ideal. 
You’d be getting a person of exceptional productivity who meets your needs with strong
credentials.  And I’d be able to handle some of the heavy workload at home where I can be
under the same roof as my family.  Everybody would win.”</div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse11">Are you willing to relocate or travel? </a>
                            </h4>
                        </div>
                        <div id="collapse11" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  Answer with a flat “no” and you may slam the door shut on this opportunity.  But
what if you’d really prefer not to relocate or travel, yet wouldn’t want to lose the job offer
over it? <br></br>
BEST ANSWER:   First find out where you may have to relocate and how much travel may
be involved.  Then respond to the question. 
If there’s no problem, say so enthusiastically. 
If you do have a reservation, there are two schools of thought on how to handle it. 
One advises you to keep your options open and your reservations to yourself in the early
going, by saying, “no problem”.  You strategy here is to get the best offer you can, then make
a judgment whether it’s worth it to you to relocate or travel. 
Also, by the time the offer comes through, you may have other offers and can make a more
informed decision.  Why kill of this opportunity before it has chance to blossom into
something really special?  And if you’re a little more desperate three months from now, you
might wish you hadn’t slammed the door on relocating or traveling. 
The second way to handle this question is to voice a reservation, but assert that you’d be open
to relocating (or traveling) for the right opportunity. 
The answering strategy you choose depends on how eager you are for the job.  If you want to
take no chances, choose the first approach. 
If you want to play a little harder-to-get in hopes of generating a more enticing offer, choose
the second. </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse12">What was the toughest challenge you have ever faced? </a>
                            </h4>
                        </div>
                        <div id="collapse12" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  Being unprepared or citing an example from so early in your life that it doesn’t
score many points for you at this stage of your career. <br></br>
BEST ANSWER:  This is an easy question if you’re prepared. Have a recent example ready
that demonstrates either: 
<li> A quality most important to the job at hand;</li>
<li> A quality that is always in demand, such as leadership, initiative, managerial skill, 
persuasiveness, courage, persistence, intelligence, etc. </li>
</div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse13">What are your goals?  </a>
                            </h4>
                        </div>
                        <div id="collapse13" class="panel-collapse collapse">
                            <div class="panel-body">
TRAPS:  Not having any…or having only vague generalities, not highly specific goals. <br></br>
BEST ANSWER:  Many executives in a position to hire you are strong believers in goalsetting.
(It’s one of the reason they’ve achieved so much).
 They like to hire in kind.
If you’re vague about your career and personal goals, it could be a big turnoff to may people
you will encounter in your job search. 
Be ready to discuss your goals for each major area of your life:  career, personal development
and learning, family, physical (health), community service and (if your interviewer is clearly
a religious person) you could briefly and generally allude to your spiritual goals (showing
you are a well-rounded individual with your values in the right order). 
Be prepared to describe each goal in terms of specific milestones you wish to accomplish
along the way, time periods you’re allotting for accomplishment, why the goal is important to
you, and the specific steps you’re taking to bring it about.  But do this concisely, as you never
want to talk more than two minutes straight before letting your interviewer back into the
conversation. </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse15">How do you define success and how do you measure up to your own
definition?</a>
                            </h4>
                        </div>
                        <div id="collapse15" class="panel-collapse collapse">
                            <div class="panel-body">
TRAPS:  Seems like an obvious enough question.  Yet many executives, unprepared for it,
fumble the ball. <br><br>
BEST ANSWER:  Give a well-accepted definition of success that leads right into your own
stellar collection of achievements. <br><br>
Example:  “The best definition I’ve come across is that success is the progressive realization
of a worthy goal.” 
“As to how I would measure up to that definition, I would consider myself both successful
and fortunate…”(Then summarize your career goals and how your achievements have indeed
represented a progressive path toward realization of your goals.)  </div>
                        </div>
                    </div>
<ul class="pagination pagination-sm">
 <li class="active"><a href="hr.php">1</a></li>
  <li><a href="hr2.php">2</a></li>
  </ul>                                                                                
                    <!-- /.panel -->
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <hr>
        
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

