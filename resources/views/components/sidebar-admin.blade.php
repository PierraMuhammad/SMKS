<div class="sidebar">
    <div class="upper">
        <p>Selamat datang, {{$auth->name}}</p>
        <div class="home">
            <h3>Home</h3>
            <a href="/admin/home"><p>Home</p></a>
            <a href="/admin/new-order"><p>New Order</p></a>
        </div>
        <div class="monitoring">
            <h3>Monitoring</h3>
            <a href="/admin/monitoring"><p>Monitoring Kendaraan</p></a>
        </div>
    </div>
    <div class="under">
        <hr>
        <a href="/logout" id="logout"><p>Logout</p></a>
    </div>
</div>