<?php require_once APPROOT.'/views/include/header.php';?>
<style>
    body{
        background-size: 100vw 100vh;
        background-attachment: fixed;
    }
    .container{
        padding:50px 100px;
        box-sizing: border-box;
    }
</style>

<body>
<video src="vid/index.mov" autoplay loop id="video">
    </video>
    <div class="container">
        <center>
        <div class="content">
            <h1><?php echo $data['title'];?></h1>
            <p>Comming Soon ...</p>
            <div id="clock"></div>
        </div>
        </center>
    </div>
</body>
<script>
    var startDate = new Date('Jan 1, 2019, 13:00:00').getTime();
    var countDown = document.getElementById('clock');
    var intvl = setInterval(() => {
        var now = new Date().getTime();
        var diff = startDate - now;

        var days = Math.floor(diff / (1000 * 60 * 60 * 24));
        var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        var sec = Math.floor((diff % (1000 * 60)) / (1000));
        countDown.innerHTML = `<span style="color: #08f;">${days} Days</span>, ${hours} Hours, ${mins} Minutes, ${sec} Seconds`;
    }, 1000);
    console.log(startDate);    
</script>
<?php require_once APPROOT.'/views/include/footer.php';?>