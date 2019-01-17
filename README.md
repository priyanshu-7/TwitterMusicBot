Twitter Radio Bot
------------------

Prerequisites/Installation
>> node package 'Twit': 
install using npm install Twit
  
>>node package 'MySQL': 
install using npm install mysql
   
>>Twitter API:
obtained by creating a Twitter Developers application. Once (and if) the application is accepted, the API keys and details can be          obtained from https://developer.twitter.com/apps. The API details are to be input in the config.js file.

>> SQL Table query:
CREATE TABLE music (name TINYTEXT, link CHAR(11), author CHAR(20)); 

Files 
>> index.php:
For users to enter details of the song which is simultaneously stored in the database.

>> music.js:
Main node file for picking song details from the details and posting them on Twitter in intervals of 1 hour. 

>> config.js:
Configuration file for Twitter API keys (Database is configured in the music.js file itself)

Mini project built with <3 (and few lines of code) by Priyanshu Shukla using Twit (https://github.com/ttezel/twit).


