<div class="loginer aj-c" style="display: none">
    <div class="block">
        <button class="btn exitBtn">
            <img src="{{asset('images/exit.svg')}}" alt="">
        </button>
        <div class="head">
            <button class="btn head_item login active">Кіру</button>
            <button class="btn head_item register">Тіркелу</button>
        </div>
        <div class="body">
            <div class="login active">
                <form method="POST" action="{{LaravelLocalization::localizeUrl('/auth/login')}}">
                    @csrf
                    <label for="phone">Логин (телефон номеріңіз):</label>
                    <input type="text" class="form-control phone_musk cst_inp" id="phone" name="phone" placeholder="+7(7__) ___ __-__">
                    <label for="password">Логин (телефон номеріңіз):</label>
                    <input type="password" class="form-control cst_inp" id="password" name="password" placeholder="************">
                    <button class="btn cst_btn">Кіру</button>
                </form>
            </div>
            <div class="register">
                <form method="post" action="{{LaravelLocalization::localizeUrl('/auth/register')}}">
                   @csrf
                    <label for="phone">Логин (телефон номеріңіз):</label>
                    <input type="text" class="form-control phone_musk cst_inp" id="phone" name="phone" placeholder="+7(7__) ___ __-__">
                    <label for="name">Аты-жөніңіз:</label>
                    <input type="text" class="form-control cst_inp" id="name" name="name" placeholder="Есен Көшербаев">
                    <label for="password">Логин (телефон номеріңіз):</label>
                    <div class="secret">
                        <input type="password" class="form-control cst_inp" id="password" name="password" placeholder="************">
                        <button type="button" class="btn eye password"></button>
                    </div>
                    <label for="password_confirm">Құпия сөзді қайталаңыз</label>
                    <div class="secret">
                        <input type="password" class="form-control cst_inp" id="password_confirm" name="password_confirm" placeholder="************">
                        <button type="button" class="btn eye password"></button>
                    </div>
                    <button class="btn cst_btn">Тіркелу</button>
                </form>
            </div>
        </div>
    </div>
</div>
