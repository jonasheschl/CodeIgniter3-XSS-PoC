# CodeIgniter 3 XSS proof of concept

This repository contains a proof of concept for an XSS vulnerability, present up to the latest version of CodeIgniter 3. 
The relevant code is located in `application/controllers/Welcome.php`.

No other changes have been made to the CodeIgniter source in this repository.

To run this PoC, run `docker compose up` in the projects root directory. Now navigate to http://localhost:80. To trigger
the XSS, navigate to http://localhost/?page=%3Cscript%3Ealert()%3C/script%3E.

You can find a detailed description of this vulnerability at
https://heschl.dev/pwnmemo/targets/codeigniter3#xss-in-codeigniter-3-via-user-controlled-load-view.
