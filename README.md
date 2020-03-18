# php-sharing-session
 Sharing PHP session ID between different domains 
 
Note: This will only work if the sites all share the same session storage.

- There are only 2x files required.
- All the sites will contain the same 2x files.
- The first will create the image links containing the session ID, and the second will retrieve this session id, change it's id to match and then show a tiny blank image.
- You will need to change the $sites array to match the sites you want to have all share the same session_id.
- We set  a session variable to hold all the sites that need their session_id changed. Once they have changed, they will then remove themselves from this array and therefore no image will be loaded for them.
- If you upload this code to each site and visit www.domain1.com/test.php and see it give you your session id. Now, if you visit www.domain2.com/test.php you should also see it give you the same session id.

Congrats, both sites are now using the same session data :)

Note: There is no security considerations in this code. 
