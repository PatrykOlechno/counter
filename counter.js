  var counter = document.getElementById('CounterScore');
  let end;

function updateDate(){
  let year = document.getElementById('year').value;
  let month = document.getElementById('month').value;
  let day = document.getElementById('day').value;
  let hour = document.getElementById('hour').value;
  let minute = document.getElementById('minute').value;
  let second = document.getElementById('second').value;

  end = new Date(year, month, day, hour, minute, second);
}

var timer = setInterval(function(){

    var actualDate = new Date().getTime();

    var distance = end - actualDate ;

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
