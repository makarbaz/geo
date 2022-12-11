
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="datetime-local" id="d2">


    <button onclick="days()">submit</button>
    <p id="demo"></p>

    <script>

  function days(){
     
     var d1 = document.getElementById("d2").value;

     var now = new Date().getTime();

      var nw = new Date(d1).getTime();
      let i = setInterval(function() {

     var dist =Math.abs(now - nw);

     const days = Math.ceil(diff/ (1000*60*60*24));

     var hr = Math.floor((dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
           
            var min = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
           

            var sec = Math.floor((dist % (1000 * 60)) / 1000);
            

            // Put the result in an element with the id="timer" attribute.  

            document.getElementById("demo").innerHTML = days + "d " + hr + "h " +

                min + "m " + sec + "s ";


     
  
   if (dist < 0) {

                clearInterval(i);

                document.getElementById("demo").innerHTML = "TIMER EXPIRED";

            }

        }, 1000);
    }
    </script>
</body>
</html>
<script type="text/javascript">
    var  d1 = document.getElementById("$expiry_date").value;
    var dest = new Date(d1).getTime();

    let x = setInterval(function() {

      let now = new Date().getTime();

      let diff = dest - now;

      let days = Math.floor(diff / (1000 * 60 * 60 * 24));


      let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));


      let mint = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));

      let secnd = Math.floor((diff % (1000 * 60)) / (1000));


      document.getElementById("demo").innerHTML = days + "d:" + hours + "h:" + mint + " m:" + secnd + "s:";
      if (diff < 0) {

        clearInterval(x);

        document.getElementById("demo").innerHTML = "TIMER EXPIRED";

      }

    }, 1000);
  </script>
