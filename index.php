<!DOCTYPE html>
<html>
  <head>
    <title>Student Records</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <h1>Students Records</h1>
    <form id="form1" name="form1"  >
      <p>
        Please enter  Student Records:
      </p>
      <div>
        <label for="name">Name:</label><br/>
        <input type="text" id="name" name="name" placeholder="Name"/>
        <span class="error" id="name_err"></span>
      </div><br />
      <div>
        <label for="surname">Surname:</label><br/>
        <input type="text" id="surname" name="surname" placeholder="Surname"/>
        <span class="error" id="su_err"></span>
      </div><br />
      <div>
        <label for="studentno">Student Number: </label><br/>
        <input type="text" id="studentno" name="studentno" placeholder="Student Number"/>
        <span class="error" id="studno_err"></span>
      </div><br />
      <div>
        <label for="email">Email:</label><br/>
        <input type="text" id="email" name="email" placeholder="Email"/>
        <span class="error" id="email_err"></span>
      </div><br />
      <div>
        <label for="course">Course:</label><br/>
        <input type="text" id="course" name="course" placeholder="Course"/>
        <span class="error" id="course_err"></span>
      </div><br />
      <!--<div>
        <label for="datepicker">Date :</label><br />
        <input type="text" name="date" id="datepicker">
        <span class="error" id="date_err"></span>
        <br />
      <div> -->        
      <!--<div>
          <input type="checkbox" id="useSieve" value="0"> <label for="useSieve">Sieve of Eratosthenes</label>
      </div> -->
      <!--<button id="submit" type="submit">Enter</button> -->
      <input id="submit" onclick="insertRecord()" type="button" value="Submit">
    </form>
    <div id="result"></div>
  </body>
</html>
