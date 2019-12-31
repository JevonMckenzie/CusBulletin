<?PHP
require_once("./include/membersite_config.php");
require_once("./include/PrivilegedUser.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

//  $privilegeduser->getByUsername();
 // $privilegeduser->initRoles();

?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>

    <script src="css/jquery-latest.js"></script>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Customs Bulletin - Quizletts</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
      <link href="stylesheets_tariffs/style.css">
      <link href="css/responsive.css">
      <link href="css/style.css">

      <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100,900' rel='stylesheet' type='text/css'>

      <link href="css/business-casual.css" rel="stylesheet">
      <link href="css/business-casual.css" rel="stylesheet">
      <link href="css/modern-business.css" rel="stylesheet">

      <script type="text/javascript" language="JavaScript">
  function set_body_height() { // set body height = window height
    $('body').height($(window).height());
  }
  $(document).ready(function() {
    $(window).bind('resize', set_body_height);
    set_body_height();
  });
</script>



<style>
/* Style the buttons */
.btn {
    border-style: none;
    outline: none;
    padding: 5px 10px;
    background-color: ;
    cursor: pointer;
    font-size: 17px;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
    background-color: #666;
    color: white;
}
</style>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
    /** Simple JavaScript Quiz
     * version 0.1.0
     * http://journalism.berkeley.edu
     * created by: Jeremy Rue @jrue
     *
     * Copyright (c) 2013 The Regents of the University of California
     * Released under the GPL Version 2 license
     * http://www.opensource.org/licenses/gpl-2.0.php
     * This program is distributed in the hope that it will be useful, but
     * WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
     */

    var quiztitle = "Customs Quizletts - International Trade & Policies";

    /**
    * Set the information about your questions here. The correct answer string needs to match
    * the correct choice exactly, as it does string matching. (case sensitive)
    *
    */
    var quiz = [
        {
            "question"      :   "Q1: What does the acronym T.F.A. stand for?",
            "image"         :   "",
            "choices"       :   [
                                    "Total Faults Assigned",
                                    "Tariff Freetrade Agreement ",
                                    "Trade Facilitation Agreement",
                                    "Tariff For All"
                                ],
             "correct"       :   "Trade Facilitation Agreement",
            "explanation"   :   "There is no explanation.",
        },
        {
            "question"      :   "Q2: What was the Theme for Customs Day 2019?",
            "image"         :   "",
            "choices"       :   [
                                    "SMART Borders for Seamless Trade, Travel & Transport",
                                    "A secure business environment for economic development",
                                    "Data Analysis for Effective Border Management",
                                    "A Harmonized System for Fair Trade"
                                ],
            "correct"       :   "SMART Borders for Seamless Trade, Travel & Transport",
            "explanation"   :   "The others were frm previous years.",
        },
        {
            "question"      :   "Q3: Where is the WCO headquaters located?",
            "image"         :   "",
            "choices"       :   [
                                    "Tokyo, Japan",
                                    "Washington, USA",
                                    "Shanghi, China",
                                    "Brussels, Belgium"
                                ],
            "correct"       :   "Brussels, Belgium",
            "explanation"   :   "There is no Explanation",
        },
        {

                    "question"      :   "Q4: What is a single window?",
            "image"         :   "",
            "choices"       :   [
                                    "System that enables traders to submit documents at a single location to fullfill only imports and transit related transaction.",
                                    "System that enables traders to submit documents at a single location to fullfill only exports and transit related transaction.",
                                    "System that enables traders to submit documents at a single location to fullfill import, export and transit related transaction.",
                                    "System that enables traders to complete multiple transactions with only a single entry document."
                                ],
            "correct"       :   "System that enables traders to submit documents at a single location to fullfill import, export and transit related transaction.",
            "explanation"   :   "There is no Explanation",
        },
          {
            "question"      :   "Q5: What does TTP stand for?",
            "image"         :   "",
            "choices"       :   [
                                    "Total Transits Passed",
                                    "Trusted Traders Program",
                                    "Total Traders Processed",
                                    "Total Trusted Traders"
                                ],
            "correct"       :   "Trusted Traders Program",
            "explanation"   :   "There is no Explanation",
        },
          {
            "question"      :   "Q6: What does WCO stand for?",
            "image"         :   "",
            "choices"       :   [
                                    "Word Customs Orders",
                                    "World Customs Only",
                                    "World Customs Offence",
                                    "World Customs Organization"
                                ],
            "correct"       :   "World Customs Organization",
            "explanation"   :   "There is no Explanation",
        },
          {
            "question"      :   "Q7: What does WTO Stand for",
            "image"         :   "",
            "choices"       :   [
                                    "World Trade Organization",
                                    "World Trade Only",
                                    "World Trade Offence",
                                    "World Trade Orders"
                                ],
            "correct"       :   "World Trade Organization",
            "explanation"   :   "There is no Explanation",
        },
          {
            "question"      :   "Q8: Belize enjoys preferential market access to nine (9) countries under the GSP, does the GSP stand for?",
            "image"         :   "",
            "choices"       :   [
                                    "Global System of Preference",
                                    "Generalized Sytem of Preference",
                                    "Global System of Priority",
                                    "Generalized System of Priority"
                                ],
            "correct"       :   "Generalized Sytem of Preference",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q9: The GATT aims to ensure a substantial reduction of tariffs and other trade barriers as well as the elimination of preferences, on a reciprocal basis. What does GATT stand for?",
            "image"         :   "",
            "choices"       :   [
                                    "Global Agreement on Tariff & Trade",
                                    "Generalized Agreement on Tariff & Trade",
                                    "Global Advocacy on Tariff & Trade",
                                    "Generalized Advocacy on Tariff & Trade"
                                ],
            "correct"       :   "Generalized Agreement on Tariff & Trade",
            "explanation"   :   "There is no Explanation",
        },

        {
            "question"      :   "Q10: The World Trade Organization was established on January 1st 1995.",
            "image"         :   "",
            "choices"       :   [
                                    "True",
                                    "False"
                                   
                                ],
            "correct"       :   "True",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q11: Belizeans returning from a neighboring town are entitled $200.00 BZD exemption.",
            "image"         :   "",
            "choices"       :   [
                                    "True",
                                    "False"
                                   
                                ],
            "correct"       :   "False",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q12: Time Release Study is a tool used by WCO to measure the average time taken between the arrival of goods and their release.",
            "image"         :   "",
            "choices"       :   [
                                    "True",
                                    "False"
                                   
                                ],
            "correct"       :   "True",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q13: The previous name for the Trusted Traders Program in Belize was the Trade Facilitation Program.",
            "image"         :   "",
            "choices"       :   [
                                    "True",
                                    "False"
                                   
                                ],
            "correct"       :   "False",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q14: Rice, beans, eggs fuel, milk, maize, poultry, fresh fruits and vegetables, meates and meat preperations, fire crackers, beers and beverages are all restricted items..",
            "image"         :   "",
            "choices"       :   [
                                    "True",
                                    "False"
                                   
                                ],
            "correct"       :   "True",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q15: How many countries are a part of CARICOM?",
            "image"         :   "",
            "choices"       :   [
                                    "12",
                                    "15",
                                    "9",
                                    "27"
                                   
                                ],
            "correct"       :   "15",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q16: The country's exchange rate is updated",
            "image"         :   "",
            "choices"       :   [
                                    "daily.",
                                    "monthly.",
                                    "weekly.",
                                    "yearly."
                                   
                                ],
            "correct"       :   "weekly.",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q17: When did the TFA enter into force?",
            "image"         :   "",
            "choices"       :   [
                                    "January 1st 2013",
                                    "September 10th 2015",
                                    "February 22nd 2017",
                                    "December 1st 1998"
                                   
                                ],
            "correct"       :   "February 22nd 2017",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q18: Problems that arise in the interpretation of different free trade provisions amongst other rules of origin.",
            "image"         :   "",
            "choices"       :   [
                                    "Discussion",
                                    "Dilema",
                                    "Dispute",
                                    "Error"
                                   
                                ],
            "correct"       :   "Dispute",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q19: The Economic nationality of goods in international trade (preferential and non-preferential).",
            "image"         :   "",
            "choices"       :   [
                                    "Origin",
                                    "Importation",
                                    "Exportation",
                                    "None of the above"
                                   
                                ],
            "correct"       :   "Origin",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q20: Activities geared towards combating commercial fraud, counterfeiting, drug trafficking, money laundering and electronic crime, as well as the smuggling of highly taxed goods, arms, nuclear materials, toxic waste, cultural goods and endangered species of plants and animals among others.",
            "image"         :   "",
            "choices"       :   [
                                    "Rummage",
                                    "Enforcement",
                                    "Operation",
                                    "Examination"
                                   
                                ],
            "correct"       :   "Enforcement",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q21: The body that promotes trade and economic development of the Caribbean.",
            "image"         :   "",
            "choices"       :   [
                                    "WTO",
                                    "UNCTAD",
                                    "HMRC",
                                    "COTED"
                                   
                                ],
            "correct"       :   "COTED",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q22: A lack of this quality in Customs can distort trade and investment opportunities, undermine public trust in government administration and ultimately jeopardize the well-being of all citezens.",
            "image"         :   "",
            "choices"       :   [
                                    "Integrity",
                                    "Equity",
                                    "Equality",
                                    "all of the above"
                                   
                                ],
            "correct"       :   "Integrity",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q23: Formal discussions in order to reach an agreement",
            "image"         :   "",
            "choices"       :   [
                                    "Convention",
                                    "Strike",
                                    "Demonstration",
                                    "Negotiation"
                                   
                                ],
            "correct"       :   "Negotiation",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q24: What kind of Trade agreement did Belize sign with Guatemala?",
            "image"         :   "",
            "choices"       :   [
                                    "EU-CARICOM agreement",
                                    "CARIFORUM",
                                    "Partial Scope Agreement",
                                    "Guatemala/Belize Venture agreement"
                                   
                                ],
            "correct"       :   "Partial Scope Agreement",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q25: Belize's Tariff schedule is based on CARICOM's",
            "image"         :   "",
            "choices"       :   [
                                    "Regular Tariff Treatment",
                                    "Specialized Common Tariff",
                                    "Specialized External Tariff",
                                    "Common External Tariff"
                                   
                                ],
            "correct"       :   "Common External Tariff",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q26: The CET is based in band raes of",
            "image"         :   "",
            "choices"       :   [
                                    "15% 35% 55% 65% and rates bw 0% & 5%",
                                    "10% 15% 20% 40% and rates bw 0% & 5%",
                                    "7% 12% 15% 60% 0%",
                                    "None of the above"
                                   
                                ],
            "correct"       :   "10% 15% 20% 40% and rates bw 0% & 5%",
            "explanation"   :   "There is no Explanation",
        },
        {
            "question"      :   "Q27: Any person entering or leaving Belize shall declare and make a report of same in such manner declare if he/she is in possession of currency of",
            "image"         :   "",
            "choices"       :   [
                                    "$10,000 or more",
                                    "$20,000 or more",
                                    "$25,000 or more",
                                    "$50,000 or more"
                                   
                                ],
            "correct"       :   "$20,000 or more",
            "explanation"   :   "There is no Explanation",
        },


    ];


    /******* No need to edit below this line *********/
    var currentquestion = 0, score = 0, submt=true, picked;

    jQuery(document).ready(function($){

        /**
         * HTML Encoding function for alt tags and attributes to prevent messy
         * data appearing inside tag attributes.
         */
        function htmlEncode(value){
          return $(document.createElement('div')).text(value).html();
        }

        /**
         * This will add the individual choices for each question to the ul#choice-block
         *
         * @param {choices} array The choices from each question
         */
        function addChoices(choices){
            if(typeof choices !== "undefined" && $.type(choices) == "array"){
                $('#choice-block').empty();
                for(var i=0;i<choices.length; i++){
                    $(document.createElement('li')).addClass('choice choice-box').attr('data-index', i).text(choices[i]).appendTo('#choice-block');                    
                }
            }
        }
        
        /**
         * Resets all of the fields to prepare for next question
         */
        function nextQuestion(){
            submt = true;
            $('#explanation').empty();
            $('#question').text(quiz[currentquestion]['question']);
            $('#pager').text('Question ' + Number(currentquestion + 1) + ' of ' + quiz.length);
            if(quiz[currentquestion].hasOwnProperty('image') && quiz[currentquestion]['image'] != ""){
                if($('#question-image').length == 0){
                    $(document.createElement('img')).addClass('question-image').attr('id', 'question-image').attr('src', quiz[currentquestion]['image']).attr('alt', htmlEncode(quiz[currentquestion]['question'])).insertAfter('#question');
                } else {
                    $('#question-image').attr('src', quiz[currentquestion]['image']).attr('alt', htmlEncode(quiz[currentquestion]['question']));
                }
            } else {
                $('#question-image').remove();
            }
            addChoices(quiz[currentquestion]['choices']);
            setupButtons();
        }

        /**
         * After a selection is submitted, checks if its the right answer
         *
         * @param {choice} number The li zero-based index of the choice picked
         */
        function processQuestion(choice){
            if(quiz[currentquestion]['choices'][choice] == quiz[currentquestion]['correct']){
                $('.choice').eq(choice).css({'background-color':'#50D943'});
                $('#explanation').html('<strong>Correct!</strong> ' + htmlEncode(quiz[currentquestion]['explanation']));
                score++;
            } else {
                $('.choice').eq(choice).css({'background-color':'#D92623'});
                $('#explanation').html('<strong>Incorrect.</strong> ' + htmlEncode(quiz[currentquestion]['explanation']));
            }
            currentquestion++;
            $('#submitbutton').html('NEXT QUESTION &raquo;').on('click', function(){
                if(currentquestion == quiz.length){
                    endQuiz();
                } else {
                    $(this).text('Check Answer').css({'color':'#222'}).off('click');
                    nextQuestion();
                }
            })
        }

        /**
         * Sets up the event listeners for each button.
         */
        function setupButtons(){
            $('.choice').on('mouseover', function(){
                $(this).css({'background-color':'#e1e1e1'});
            });
            $('.choice').on('mouseout', function(){
                $(this).css({'background-color':'#fff'});
            })
            $('.choice').on('click', function(){
                picked = $(this).attr('data-index');
                $('.choice').removeAttr('style').off('mouseout mouseover');
                $(this).css({'border-color':'#222','font-weight':700,'background-color':'#c1c1c1'});
                if(submt){
                    submt=false;
                    $('#submitbutton').css({'color':'#000'}).on('click', function(){
                        $('.choice').off('click');
                        $(this).off('click');
                        processQuestion(picked);
                    });
                }
            })
        }
        
        /**
         * Quiz ends, display a message.
         */
        function endQuiz(){
            $('#explanation').empty();
            $('#question').empty();
            $('#choice-block').empty();
            $('#submitbutton').remove();
            $('#question').text("You got " + score + " out of " + quiz.length + " correct.");
            echo "Thanks for Participating"; echo score;
            $(document.createElement('h2')).css({'text-align':'center', 'font-size':'4em'}).text(Math.round(score/quiz.length * 100) + '%').insertAfter('#question');
        }

        /**
         * Runs the first time and creates all of the elements for the quiz
         */
        function init(){
            //add title
            if(typeof quiztitle !== "undefined" && $.type(quiztitle) === "string"){
                $(document.createElement('h1')).text(quiztitle).appendTo('#frame');
            } else {
                $(document.createElement('h1')).text("Quiz").appendTo('#frame');
            }

            //add pager and questions
            if(typeof quiz !== "undefined" && $.type(quiz) === "array"){
                //add pager
                $(document.createElement('p')).addClass('pager').attr('id','pager').text('Question 1 of ' + quiz.length).appendTo('#frame');
                //add first question
                $(document.createElement('h2')).addClass('question').attr('id', 'question').text(quiz[0]['question']).appendTo('#frame');
                //add image if present
                if(quiz[0].hasOwnProperty('image') && quiz[0]['image'] != ""){
                    $(document.createElement('img')).addClass('question-image').attr('id', 'question-image').attr('src', quiz[0]['image']).attr('alt', htmlEncode(quiz[0]['question'])).appendTo('#frame');
                }
                $(document.createElement('p')).addClass('explanation').attr('id','explanation').html('&nbsp;').appendTo('#frame');
            
                //questions holder
                $(document.createElement('ul')).attr('id', 'choice-block').appendTo('#frame');
            
                //add choices
                addChoices(quiz[0]['choices']);
            
                //add submit button
                $(document.createElement('div')).addClass('choice-box').attr('id', 'submitbutton').text('Check Answer').css({'font-weight':700,'color':'#222','padding':'30px 0'}).appendTo('#frame');
            
                setupButtons();
            }
        }
        
        init();
    });
    </script>
    <style type="text/css" media="all">
        /*css reset */
        html,body,div,span,h1,h2,h3,h4,h5,h6,p,code,small,strike,strong,sub,sup,b,u,i{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0;} 
        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;} 
        body{line-height:1; font:normal 0.9em/1em "Helvetica Neue", Helvetica, Arial, sans-serif;} 
        ol,ul{list-style:none;}
        strong{font-weight:700;}
        #frame{max-width:620px;width:auto;border:1px solid #ccc;background:#fff;padding:10px;margin:3px;}
        h1{font:normal bold 2em/1.8em "Helvetica Neue", Helvetica, Arial, sans-serif;text-align:left;border-bottom:1px solid #999;padding:0;width:auto}
        h2{font:italic bold 1.3em/1.2em "Helvetica Neue", Helvetica, Arial, sans-serif;padding:0;text-align:center;margin:20px 0;}
        p.pager{margin:5px 0 5px; font:bold 1em/1em "Helvetica Neue", Helvetica, Arial, sans-serif;color:#999;}
        img.question-image{display:block;max-width:250px;margin:10px auto;border:1px solid #ccc;width:100%;height:auto;}
        #choice-block{display:block;list-style:none;margin:0;padding:0;}
        #submitbutton{background:#5a6b8c;}
        #submitbutton:hover{background:#7b8da6;}
        #explanation{margin:0 auto;padding:20px;width:75%;}
        .choice-box{display:block;text-align:center;margin:8px auto;padding:10px 0;border:1px solid #666;cursor:pointer;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
    </style>
</head>



 <body>  





  <div class="container">
 






 
<div class="bg-faded p-4 my-4">

          <table width="100%">
            <tr><td align="center">
              <div class="theme">
                <h2 class="theme_" style="color:darkblue">Customs & Excise Department Bulletin</h2>
              </div>
            </td></tr>            
          </table>

          <div class="card-header" role="tab" id="headingNine">
<table align="center">
  <tr>

    
    <td align="center" width="50%"><a href='change-pwd.php'>CHANGE MY PASSWORD</a></td>
    
    <td align="center" width="50%"><a href='logout.php'>LOGOUT</a></td>
  </tr>
          <table width="100% align="center">   
            <tr>
                 <td align="center" width="100%"> 
                        <h3 class="my-4"> 
                  <div id='fg_membersite_content' align="center">
                    <table align="center"> 
                      <tr><td align="center">
            
            Stay Smart <?= $fgmembersite->UserFullName(); ?>.<br>
           

        



Keep Quizzing Yourself.</td>
<td align="center"><a href="/CustomsProcedures/index.php"><img src="images/trainingg.jpg" height = "70px" width="110px"> </a><br><h5>Click to view Documents</h5></td></tr>
</table></div></h3></td>
            </tr>
          </table>


 
    <table width="100%" align="center">
       <tr width="100%"><td width="100%" align="center">

                 <div id="frame" role="content"></div>

       </td></tr>
    </table>
      </table>
        </div>


</div>







  



</div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
