# FloatingRepo
Everyone its files in the box

Hello and welcome to FloatingRepo!

FloatingRepo is a light and simple software on premise to have your voice machine.

FloatingRepo is released under GPLv3 license, it is supplied AS-IS and we do not take any responsibility for its misusage.

First step, use the left side panel password and salt fields to create the hash to every of your friends in the config file. Remember to manually set there also the salt value.

As you are going to run FloatingRepo in the PHP process context, using a limited web server or phpfpm user, you must follow some simple directives for an optimal first setup:
Check the permissions of your "data" folder in your web app private path; and set its path in the config file.

Finish to setup the configuration file apporpriately, in the specific:
* Configure your users.
* Configure the APP_FILE_MAX_SIZE for the upload appropriately.
* Configure the APP_BLOG_MAX_POSTS attributes as required.
* Configure the PAGINATION flag as required.

## Screenshot:

![FloatingRepo in action #2](/Public/static/res/screenshot2.jpg)


Feedback: code@numd.eu
