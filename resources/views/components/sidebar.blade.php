<div class="sidebar">
    <div class="upper">
        <p>Selamat datang, {{$auth->name}}</p>
        <div class="monitoring">
            <h3>Monitoring</h3>
            <a href="/user/monitoring"><p>Monitoring Kendaraan</p></a>
        </div>
        <div class="manajemen">
            <h3>Manajemen</h3>
            <a href="/user/manajemen"><p>Manajemen Kendaraan</p></a>
        </div>
    </div>
    <div class="under">
        <hr>
        <a href="/logout" id="logout"><p>Logout</p></a>
    </div>
</div>