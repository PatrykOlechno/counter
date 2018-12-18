var date = document.getElementById('date').value;
  var counter = document.getElementById('CounterScore');
  var reset = document.getElementById('reset');
  var startDate = new Date('date').getTime();

  reset.onclick = function(){
    startDate = new Date().getTime();
  };

  var timer = setInterval(function(){
    //actual date
    var actualDate = new Date().getTime();

    //calculating distance
    var distance = actualDate - startDate;

    //changing distance into days, hours etc...
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (seconds<10){
      seconds = "0"+ seconds;
    }
    counter.innerHTML = days+ " days <br>"+ hours+ " hours <br>"+ minutes+ " minutes <br>"+ seconds+ " seconds <br>";

  }, 1000);
}
