<div class="successPopup aj-c" style="display: none">
    <div class="block" id="successPopup">
        <button class="btn exitBtn">
            <img src="{{asset('images/exit.svg')}}" alt="">
        </button>
        <div class="body">
            Сіздің сұранысыңыз сәтті қабылданды!
        </div>
    </div>
</div>
<script>
    $( document ).ready(function() {
        setTimeout(function(){
            $('.successPopup').fadeIn(300);
        },600);
    });

</script>
