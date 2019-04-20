/*alert(my_js_array.length);*/
/*storing the fib sequence in an array which will be used in the data and label array.*/
var myArray=[];
var num=[];
for (i = 0; i < my_js_array.length; i++) {
num[i]=i;
 myArray[i]= my_js_array[i];
}
/*alert(num[4]);*/

var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {

          labels: myArray,
          datasets: [{
            data: num,
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });