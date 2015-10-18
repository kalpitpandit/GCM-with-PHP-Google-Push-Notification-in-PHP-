# GCM-with-PHP-Google-Push-Notification-in-PHP-
This class you can use for Google Push Notification (GCM)


**Frequently Asked Questions**

1. **How to use this class?**
	Just copy and paste this class in your application. Create object of class and call a method called "sendGoogleCloudMessage" with the message array which you want to send to GCM.

2. **Do i need PHP-curl to run this class?**
	Yes, You have to install PHP curl package in your server/sytems. Please refer this guide to install curl : http://php.net/manual/en/curl.installation.php

3. **How to get GCM Authkey/Token?**
	To get authkey you have to create application from here : https://console.developers.google.com/project. After creating app you can enable Google Clould Messaging API from APIs section from left menu.

4. **What is registration_ids?**
	Here you have to pass device id(s) in which device you want to send push notification.
