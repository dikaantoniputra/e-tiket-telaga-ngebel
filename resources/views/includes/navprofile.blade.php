<div class="col-md-4 mt-5 pt-3">
    <div class="account-information">
        

        <ul>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-user'></i>
                    My Profile
                </a>
            </li>
            <li>
                <a href="{{ url('tiket') }}">
                    <i class='bx bx-user'></i>
                    Tiket Pesanan
                </a>
            </li>
            <li>
                <a href="{{ url('riwayat') }}">
                    <i class='bx bxs-file-doc'></i>
                    My Riwayat Pemesanan
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-lock-alt' ></i>
                    Change Password
                </a>
            </li>
          
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class='bx bx-log-out'></i>
                        Log Out
                    </a>
                </form>
            </li>
            
        </ul>
    </div>
</div>