<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

  <form action="" Method="post">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="username" required>
    </div>
    <div class="form-group">
    <label for="usr">Gander:</label>
    
    <div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input checked " value="">Male
  </label>
</div>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input checked " value="">Female
  </label>
</div>
    
<div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1" name="sellist1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" required></textarea>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    
<h2>Date of Birth:</h2>
        <input type="date" id="dob">
        <button onclick="dateDisplay()">Submit</button>
        <p id="demo"></p>
        <script>
            function dateDisplay() {
                var x = document.getElementById("dob").value;
                document.getElementById("demo").innerHTML = x;
            }
        </script>
</body>
</html>
