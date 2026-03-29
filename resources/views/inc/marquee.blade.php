
<div class="marquee-container bg-secondary">
    <div class="marquee">
        <a class="font-weight-bold text-primary"  href="https://drive.google.com/drive/folders/1kJy0r5qi0IM2PvN7gPYxNPTI_WoSUKtB?usp=sharing">
            {!!Config::get('app.marquee-text')!!}
        </a>
    </div>
</div>

<style>
.marquee-container{
    width:100%;
    overflow:hidden;
    background:#f2f2f2;
    padding:10px 0;
    border-top:1px solid #ddd;
    border-bottom:1px solid #ddd;
}

.marquee{
    display:inline-block;
    white-space:nowrap;
    padding-left:100%;
    animation: marquee 20s linear infinite;
}

.marquee a{
    font-size:18px;
    text-decoration:none;
}

@keyframes marquee{
    0%{
        transform: translateX(0);
    }
    100%{
        transform: translateX(-100%);
    }
}

.marquee:hover{
    animation-play-state: paused;
}
</style>