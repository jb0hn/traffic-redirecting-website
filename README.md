# Traffic redirecting website

Small project to redirect exactly one half of the traffic to the given website and second half to another. Furthermore, it stores some data about the client visiting the website in MySQLi database and displays it in the subpage with statistics. The mentioned data is: 
- ID number (autoincremented) of the visit (starting from 1 and incrementing every redirection by 1)
- IP address of the client
- Access date (date and time of the redirection)
- website URL to which client was redirected 

The PHP script checks if the last ID number fetched from the database is odd or even. If the ID is even, it redirect to the first website, if odd - to the second. 

Project was developed using vanilla PHP 7, MySQLi and Materialize.css for the needs of my MA study (where I have two, very simmilar questionnaire and I need to collect data for them equally).

MySQLi database is not included. 
