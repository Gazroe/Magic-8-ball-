<?php

function magic8Ball()
{
  echo "Tell me....What is your question ?\n";
  $question = readline(">>>");

  echo "\nHmm I see... Your question is $question... I understand why this weighs on you... I have consulted the spirit world.\nHere is your answer: \n"; 

  $choice = rand(0, 9);

  switch($choice)
  {
    case 0:
      echo "It is certain.\n";
      break;
    case 1:
      echo "It is decidedly so.\n";
      break;
    case 2: 
      echo "Without a doubt.\n";
      break; 
    case 3: 
      echo "Yes - definitely.\n";
      break;
    case 4: 
      echo "You may rely on it.\n";
      break;
    case 5: 
      echo "As I see it, yes.\n";
      break;
    case 6:
      echo "Most likely.\n";
      break;  
     case 7: 
      echo "My sources say no.";
      break;
     case 8:
      echo "Ask again later.";
      break;
     case 9: 
      echo "Very doubtful.";
      break;
  }
    

}

magic8Ball();
magic8Ball();
magic8Ball();