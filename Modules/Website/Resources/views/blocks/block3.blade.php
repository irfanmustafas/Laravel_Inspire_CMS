<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class="w3-center">MY WORK</h3>
    <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center">
        <div class="w3-col m3">
            <img src="{{asset("storage/img/p1.jpg")}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
        </div>

        <div class="w3-col m3">
            <img src="{{asset("storage/img/p2.jpg")}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
        </div>

        <div class="w3-col m3">
            <img src="{{asset("storage/img/p3.jpg")}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
        </div>

        <div class="w3-col m3">
            <img src="{{asset("storage/img/p4.jpg")}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
        </div>
    </div>

    <div class="w3-row-padding w3-center w3-section">
        <div class="w3-col m3">
            <img src="{{asset("storage/img/p5.jpg")}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
        </div>

        <div class="w3-col m3">
            <img src="{{asset("storage/img/p6.jpg")}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
        </div>

        <div class="w3-col m3">
            <img src="{{asset("storage/img/p7.jpg")}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
        </div>

        <div class="w3-col m3">
            <img src="{{asset("storage/img/p8.jpg")}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
        </div>
        <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
    </div>
</div>