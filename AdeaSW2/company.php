<!doctype html>

<html lang="en">
  <head>
    <title>Form 1</title>
    <meta charset="utf-8">
  </head>

  <body>
    <h1>Please fill this form</h1>

 <!-- I wonder how your submit button worked because your action is not referencing any php file   -->
<form method="post" action="submitCompany">
    Company Name:<p> <input type="text" name="companyname"/></p>
        <br/>
    Email:   <p> <input type="email" name="email"/></p>
        <br/>
    Telephone:  <p> <input type="text" name="telephone"/></p>
        <br/>
    Country:  <p> <input type="text" name="country"/></p>
        <br/>
    Address: <p> <input type="text" name="address"/></p>
        <br/>
    
        <p>   <input type="submit" name="submit" />  </p>
</form>


  </body>
</html>
