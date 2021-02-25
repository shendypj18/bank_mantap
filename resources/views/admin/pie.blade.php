<canvas id="PieChart" width="400" height="400"></canvas>
<script>
$(function () {
     var oilCanvas = document.getElementById("PieChart");
     //Chart.defaults.global.defaultFontFamily = "Lato";
     //Chart.defaults.global.defaultFontSize = 18;
    //var ctx = document.getElementById("PieChart").getContext('2d');
     var oilData = {
         labels: [
             "Saudi Arabia",
             "Russia",
             "Iraq",
             "United Arab Emirates",
             "Canada"
         ],
         datasets: [
             {
                 data: [133.3, 86.2, 52.2, 51.2, 50.2],
                 backgroundColor: [
                     "#FF6384",
                     "#63FF84",
                     "#84FF63",
                     "#8463FF",
                     "#6384FF"
                 ]
         }]
     };
     var pieChart = new Chart(oilCanvas, {
         type: 'pie',
         data: oilData
     });
});
</script>
