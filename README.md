# Simple Personal Website

This repo hosts my personal website project. 

It's nothing fancy, just a way for me to mess around with some PHP. The goal is to stay as simple as possible, but still enforce some standard coding practices to make the whole thing manageable.

I've included the sources I used to make it in case any one is interested in making their own.

## Setting up and running
I use docker to develop & deploy, so I recommend doing the same.

Before running, copy the `.env.sample` file and replace the values with what you want to use for your database.

Then run `docker-compose up` to create & run the containers.



## Sources
Docker set up was done by following [this guide](https://www.sitepoint.com/docker-php-development-environment).  
Core PHP Fundamentals from [Learning PHP, MySQL, and JavaScript](https://www.oreilly.com/library/view/learning-php-mysql/9781492093817/).  
The rest was made by using [PHP The Right Way](https://phptherightway.com/) as reference along with posts and tutorials from around the net.  

Tutorials:
- [PHP is A-OK for Templating](https://css-tricks.com/php-is-a-ok-for-templating/)
