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
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse16">Tell me about something you did or failed to do that you now feel a
little ashamed of. </a>
                            </h4>
                        </div>
                        <div id="collapse16" class="panel-collapse collapse">
                            <div class="panel-body"><p>
                                
TRAPS:  There are some questions your interviewer has no business asking, and this is one. 
But while you may feel like answering, “none of your business,” naturally you can’t.  Some
interviewers ask this question on the chance you admit to something, but if not, at least
they’ll see how you think on your feet. 
Some unprepared candidates, flustered by this question, unburden themselves of guilt from
their personal life or career, perhaps expressing regrets regarding a parent, spouse, child, etc. 
All such answers can be disastrous. <br><br>
BEST ANSWER:  As with faults and weaknesses, never confess a regret.  But don’t seem as
if you’re stonewalling either. 
Best strategy:  Say you harbor no regrets, then add a principle or habit you practice regularly
for healthy human relations. <br><br>
Example:  Pause for reflection, as if the question never occurred to you.  Then say, “You
know, I really can’t think of anything.”  (Pause again, then add): “I would add that as a
general management principle, I’ve found that the best way to avoid regrets is to avoid
causing them in the first place.  I practice one habit that helps me a great deal in this regard. 
At the end of each day, I mentally review the day’s events and conversations to take a second
look at the people and developments I’m involved with and do a doublecheck of what they’re 
likely to be feeling.  Sometimes I’ll see things that do need more follow-up, whether a pat on
the back, or maybe a five minute chat in someone’s office to make sure we’re clear on
things…whatever.” 
“I also like to make each person feel like a member of an elite team, like the Boston Celtics
or LA Lakers in their prime.  I’ve found that if you let each team member know you expect
excellence in their performance…if you work hard to set an example yourself…and if you let
people know you appreciate and respect their feelings, you wind up with a highly motivated
group, a team that’s having fun at work because they’re striving for excellence rather than
brooding over slights or regrets.” </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse17">The "Silent Treatment"</a>
                            </h4>
                        </div>
                        <div id="collapse17" class="panel-collapse collapse">
                            <div class="panel-body">
                <p>                 
TRAPS:  Beware – if you are unprepared for this question, you will probably not handle it
right and possibly blow the interview.  Thank goodness most interviewers don’t employ it. 
It’s normally used by those determined to see how you respond under stress.  Here’s how it
works: 
You answer an interviewer’s question and then, instead of asking another, he just stares at
you in a deafening silence. 
You wait, growing a bit uneasy, and there he sits, silent as Mt. Rushmore, as if he doesn’t
believe what you’ve just said, or perhaps making you feel that you’ve unwittingly violated
some cardinal rule of interview etiquette. <br>
When you get this silent treatment after answering a particularly difficult question , such as
“tell me about your weaknesses”, its intimidating effect can be most disquieting, even to
polished job hunters. 
Most unprepared candidates rush in to fill the void of silence, viewing prolonged,
uncomfortable silences as an invitation to clear up the previous answer which has obviously
caused some problem.  And that’s what they do – ramble on, sputtering more and more
information, sometimes irrelevant and often damaging, because they are suddenly playing the
role of someone who’s goofed and is now trying to recoup.  But since the candidate doesn’t 
know where or how he goofed, he just keeps talking, showing how flustered and confused he
is by the interviewer’s unmovable silence. <br><br>
BEST ANSWER:  Like a primitive tribal mask, the Silent Treatment loses all it power to
frighten you once you refuse to be intimidated.  If your interviewer pulls it, keep quiet
yourself for a while and then ask, with sincere politeness and not a trace of sarcasm, “Is there
anything else I can fill in on that point?”  That’s all there is to it. 
Whatever you do, don’t let the Silent Treatment intimidate you into talking a blue streak,
because you could easily talk yourself out of the position.                           </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse18">Describe your ideal company, location and job. </a>
                            </h4>
                        </div>
                        <div id="collapse18" class="panel-collapse collapse">
                            <div class="panel-body">
TRAPS:  This is often asked by an experienced interviewer who thinks you may be
overqualified, but knows better than to show his hand by posing his objection directly.  So
he’ll use this question instead, which often gets a candidate to reveal that, indeed, he or she is
looking for something other than the position at hand. <br><br>
BEST ANSWER:  The only right answer is to describe what this company is offering, being
sure to make your answer believable with specific reasons, stated with sincerity, why each
quality represented by this opportunity is attractive to you.<br> 
Remember that if you’re coming from a company that’s the leader in its field or from a
glamorous or much admired company, industry, city or position, your interviewer and his
company may well have an “Avis” complex.  That is, they may feel a bit defensive about
being “second best” to the place you’re coming from, worried that you may consider them
bush league. 
This anxiety could well be there even though you’ve done nothing to inspire it. You must go
out of your way to assuage such anxiety, even if it’s not expressed, by putting their virtues
high on the list of exactly what you’re looking for, providing credible reason for wanting
these qualities. 
If you do not express genuine enthusiasm for the firm, its culture, location, industry, etc., you
may fail to answer this “Avis” complex objection and, as a result, leave the interviewer
suspecting that a hot shot like you, coming from a Fortune 500 company in New York, just
wouldn’t be happy at an unknown manufacturer based in Topeka, Kansas.</div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse19">What are your career options right now? </a>
                            </h4>
                        </div>
                        <div id="collapse19" class="panel-collapse collapse">
                            <div class="panel-body">
TRAPS:  The interviewer is trying to find out, “How desperate are you?” <br><br>
BEST ANSWER:  Prepare for this question by thinking of how you can position yourself as
a desired commodity.  If you are still working, describe the possibilities at your present firm
and why, though you’re greatly appreciated there, you’re looking for something more
(challenge, money, responsibility, etc.).  Also mention that you’re seriously exploring
opportunities with one or two other firms. <br>
If you’re not working, you can talk about other employment possibilities you’re actually
exploring.  But do this with a light touch, speaking only in general terms.  You don’t want to
seem manipulative or coy.</div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse20">Tell me about a situation when your work was criticized. </a>
                            </h4>
                        </div>
                        <div id="collapse20" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  This is a tough question because it’s a more clever and subtle way to get you to
admit to a weakness.  You can’t dodge it by pretending you’ve never been criticized. 
Everybody has been.  Yet it can be quite damaging to start admitting potential faults and
failures that you’d just as soon leave buried. 
This question is also intended to probe how well you accept criticism and direction. <br><br>
BEST ANSWERS:  Begin by emphasizing the extremely positive feedback you’ve gotten
throughout your career and (if it’s true) that your performance reviews have been uniformly
excellent. 
Of course, no one is perfect and you always welcome suggestions on how to improve your
performance.  Then, give an example of a not-too-damaging learning experience from early
in your career and relate the ways this lesson has since helped you.  This demonstrates that
you learned from the experience and the lesson is now one of the strongest breastplates in
your suit of armor. 
If you are pressed for a criticism from a recent position, choose something fairly trivial that
in no way is essential to your successful performance.  Add that you’ve learned from this,
too, and over the past several years/months, it’s no longer an area of concern because you
now make it a regular practice to…etc. 
Another way to answer this question would be to describe your intention to broaden your
master of an area of growing importance in your field.  For example, this might be a
computer program you’ve been meaning to sit down and learn… a new management
technique you’ve read about…or perhaps attending a seminar on some cutting-edge branch of
your profession. 
Again, the key is to focus on something not essential to your brilliant performance but which
adds yet another dimension to your already impressive knowledge base. 
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse21">What are your outside interests? </a>
                            </h4>
                        </div>
                        <div id="collapse21" class="panel-collapse collapse">
                            <div class="panel-body">
TRAPS:  You want to be a well-rounded, not a drone.  But your potential employer would be
even more turned off if he suspects that your heavy extracurricular load will interfere with
your commitment to your work duties. <br><br>
BEST ANSWERS:  Try to gauge how this company’s culture would look upon your favorite
outside activities and be guided accordingly. 
You can also use this question to shatter any stereotypes that could limit your chances.  If
you’re over 50, for example, describe your activities that demonstrate physical stamina.  If
you’re young, mention an activity that connotes wisdom and institutional trust, such as
serving on the board of a popular charity. 
But above all, remember that your employer is hiring your for what you can do for him, not
your family, yourself or outside organizations, no matter how admirable those activities may
be.                              </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse22">How do you feel about reporting to a younger person (minority, woman,
etc)? </a>
                            </h4>
                        </div>
                        <div id="collapse22" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  It’s a shame that some interviewers feel the need to ask this question, but many
understand the reality that prejudices still exist among some job candidates, and it’s better to
try to flush them out beforehand. 
The trap here is that in today’s politically sensitized environment, even a well-intentioned
answer can result in planting your foot neatly in your mouth.  Avoid anything which smacks
of a patronizing or an insensitive attitude, such as “I think they make terrific bosses” or “Hey,
some of my best friends are…” <br>
Of course, since almost anyone with an IQ above room temperature will at least try to
steadfastly affirm the right answer here, your interviewer will be judging your sincerity most
of all.  “Do you really feel that way?” is what he or she will be wondering. 
So you must make your answer believable and not just automatic.  If the firm is wise enough
to have promoted peopled on the basis of ability alone, they’re likely quite proud of it, and
prefer to hire others who will wholeheartedly share their strong sense of fair play.  <br><br>
BEST ANSWER:  You greatly admire a company that hires and promotes on merit alone
and you couldn’t agree more with that philosophy.  The age (gender, race, etc.) of the person
you report to would certainly make no difference to you. <br>
Whoever has that position has obviously earned it and knows their job well.  Both the person
and the position are fully deserving of respect.  You believe that all people in a company,
from the receptionist to the Chairman, work best when their abilities, efforts and feelings are
respected and rewarded fairly, and that includes you.  That’s the best type of work
environment you can hope to find.                              </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse23">Looking back, what would you do differently in your life?</a>
                            </h4>
                        </div>
                        <div id="collapse23" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  This question is usually asked to uncover any life-influencing mistakes, regrets,
disappointments or problems that may continue to affect your personality and performance. <br>
You do not want to give the interviewer anything negative to remember you by, such as some
great personal or career disappointment, even long ago, that you wish could have been
avoided. 
Nor do you wish to give any answer which may hint that your whole heart and soul will not
be in your work. <br><br>
BEST ANSWER:  Indicate that you are a happy, fulfilled, optimistic person and that, in
general, you wouldn’t change a thing. <br>
Example:  “It’s been a good life, rich in learning and experience, and the best it yet to come. 
Every experience in life is a lesson it its own way.  I wouldn’t change a thing.”                             </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse24">Who has inspired you in your life and why?</a>
                            </h4>
                        </div>
                        <div id="collapse24" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  The two traps here are unpreparedness and irrelevance.  If you grope for an answer,
it seems you’ve never been inspired.  If you ramble about your high school basketball coach,
you’ve wasted an opportunity to present qualities of great value to the company. <br><br>
BEST ANSWER:  Have a few heroes in mind, from your mental “Board of Directors” –
Leaders in your industry, from history or anyone else who has been your mentor. 
Be prepared to give examples of how their words, actions or teachings have helped inspire
your achievements.  As always, prepare an answer which highlights qualities that would be
highly valuable in the position you are seeking.                           </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse25">What changes would you make if you came on board? </a>
                            </h4>
                        </div>
                        <div id="collapse25" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  Watch out!  This question can derail your candidacy faster than a bomb on the
tracks – and just as you are about to be hired. <br>
Reason:  No matter how bright you are, you cannot know the right actions to take in a
position before you settle in and get to know the operation’s strengths, weaknesses key
people, financial condition, methods of operation, etc.  If you lunge at this temptingly baited
question, you will probably be seen as someone who shoots from the hip. <br>
Moreover, no matter how comfortable you may feel with your interviewer, you are still an
outsider.  No one, including your interviewer, likes to think that a know-it-all outsider is 
going to come in, turn the place upside down and with sweeping, grand gestures, promptly
demonstrate what jerks everybody’s been for years. <br><br>
BEST ANSWER:  You, of course, will want to take a good hard look at everything the
company is doing before making any recommendations. <br>
Example:  “Well, I wouldn’t be a very good doctor if I gave my diagnosis before the
examination.  Should you hire me, as I hope you will, I’d want to take a good hard look at
everything you’re doing and understand why it’s being done that way.  I’d like to have indepth meetings with you and the other key people to get a deeper grasp of what you feel
you’re doing right and what could be improved.
<br>
“From what you’ve told me so far, the areas of greatest concern to you are…” (name them. 
Then do two things.  First, ask if these are in fact his major concerns.  If so then reaffirm how
your experience in meeting similar needs elsewhere might prove very helpful).                             </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse26">What would you say to your boss if he's crazy about an idea, but you think
it stinks?</a>
                            </h4>
                        </div>
                        <div id="collapse26" class="panel-collapse collapse">
                            <div class="panel-body">
                               TRAPS:  This is another question that pits two values, in this case loyalty and honesty,
against one another. <br><br>
BEST ANSWER:    Remember the rule stated earlier:  In any conflict between values,
always choose integrity. <br>
Example:  I believe that when evaluating anything, it’s important to emphasize the positive. 
What do I like about this idea?” 
“Then, if you have reservations, I certainly want to point them out, as specifically, objectively
and factually as I can.” 
“After all, the most important thing I owe my boss is honesty.  If he can’t count on me for
that, then everything else I may do or say could be questionable in his eyes.” 
“But I also want to express my thoughts in a constructive way.  So my goal in this case would
be to see if my boss and I could make his idea even stronger and more appealing, so that it
effectively overcomes any initial reservation I or others may have about it.” 
“Of course, if he overrules me and says, ‘no, let’s do it my way,’ then I owe him my full and
enthusiastic support to make it work as best it can.” </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse27">Give me an example of your creativity (analytical skill,managing ability,
etc.) </a>
                            </h4>
                        </div>
                        <div id="collapse27" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  The worst offense here is simply being unprepared.  Your hesitation may seem as if
you’re having a hard time remembering the last time you were creative, analytical, etc.<br><br>  
BEST ANSWER:  Remember from Question 2 that you should commit to memory a list of
your greatest and most recent achievements, ever ready on the tip of your tongue. 
If you have such a list, it’s easy to present any of your achievements in light of the quality the
interviewer is asking about.  For example, the smashing success you orchestrated at last
year’s trade show could be used as an example of creativity, or analytical ability, or your
ability to manage.  </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse28">What do you worry about?</a>
                            </h4>
                        </div>
                        <div id="collapse28" class="panel-collapse collapse">
                            <div class="panel-body">
                                TRAPS:  Admit to worrying and you could sound like a loser.  Saying you never worry
doesn’t sound credible. <br><br>
BEST ANSWER:  Redefine the word ‘worry’ so that it does not reflect negatively on you. <br>
Example:  “I wouldn’t call it worry, but I am a strongly goal-oriented person.  So I keep
turning over in my mind anything that seems to be keeping me from achieving those goals,
until I find a solution.  That’s part of my tenacity, I suppose.” 
</div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse29">The "Hypothetical Problem" </a>
                            </h4>
                        </div>
                        <div id="collapse29" class="panel-collapse collapse">
                            <div class="panel-body">
TRAPS:  Sometimes an interviewer will describe a difficult situation and ask, “How would
you handle this?”  Since it is virtually impossible to have all the facts in front of you from
such a short presentation, don’t fall into the trap of trying to solve this problem and giving
your verdict on the spot. It will make your decision-making process seem woefully
inadequate. <br><br>
BEST ANSWER:  Instead, describe the rational, methodical process you would follow in
analyzing this problem, who you would consult with, generating possible solutions, choosing
the best course of action, and monitoring the results. <br>
Remember, in all such, “What would you do?” questions, always describe your process or
working methods, and you’ll never go wrong.  </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse30">On a scale of one to ten, rate me as an interviewer.</a>
                            </h4>
                        </div>
                        <div id="collapse30" class="panel-collapse collapse">
                            <div class="panel-body">
TRAPS:  Give a perfect “10,” and you’ll seem too easy to please.  Give anything less than a
perfect 10, and he could press you as to where you’re being critical, and that road leads
downhill for you. <br></br>
BEST ANSWER:  Once again, never be negative.  The interviewer will only resent criticism
coming from you.  This is the time to show your positivism. 
However, don’t give a numerical rating. Simply praise whatever interview style he’s been
using. 
If he’s been tough, say “You have been thorough and tough-minded, the very qualities
needed to conduct a good interview.” 
If he’s been methodical, say, “You have been very methodical and analytical, and I’m sure
that approach results in excellent hires for your firm.” 
In other words, pay him a sincere compliment that he can believe because it’s anchored in the
behavior you’ve just seen. </div>
                        </div>
                    </div>
<ul class="pagination pagination-sm">
  <li><a href="hr.php">1</a></li>
  <li class="active"><a href="hr2.php">2</a></li>
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


