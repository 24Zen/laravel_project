<style>
        @import url('https://fonts.googleapis.com/icon?family=Material+Icons');
/* Styles for the dropdown container */
.dropdown-right {
    position: absolute;
    top: 0px;
    right: 0px;
    display: inline-block;
}


/* Styles for the right-aligned button */
.custom-button-right {
    display: inline-block;
    width: 50px;
    height: 50px;
    font-size: 24px;
    line-height: 50px;
    color: white;
    background-color: #f6288f77;
    text-align: center;
    cursor: pointer;
    border: none;
    position: relative; /* Ensure dropdown aligns relative to the button */
}

/* Styles for the dropdown content */
.dropdown-content-right {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    top: 40px;
    right: 0; /* Align the dropdown content with the button */
    margin-right: 20px; /* Move dropdown content away from the right edge */
    border-radius: 7px; /* Apply rounded corners */
    opacity: 0.80; /* Set opacity to 50% */
}

/* Dropdown link styles */
.dropdown-content-right a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-radius: 7px; /* Apply rounded corners */
    opacity: 0.80; /* Set opacity to 50% */
}

/* Dropdown link hover effect */
.dropdown-content-right a:hover {
    background-color: #ddd;
    border-radius: 7px; /* Apply rounded corners */
    opacity: 0.80; /* Set opacity to 50% */
}

/* Show the dropdown when the button is clicked */
.show-dropdown {
    display: block;
    border-radius: 7px; /* Apply rounded corners */
    opacity: 0.80; /* Set opacity to 50% */
}

</style>


<div class="dropdown-right">
    <span class="custom-button-right material-icons" onclick="toggleDropdown()">&#xe8b8;</span>
    <div class="dropdown-content-right">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('profile.edit') }}">Profile</a>
        <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit();">Log Out</a>
    </div>
</div>

    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

<script>
    function toggleDropdown() {
    const dropdown = document.querySelector('.dropdown-content-right');
    dropdown.classList.toggle('show-dropdown');
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.custom-button-right')) {
        const dropdowns = document.getElementsByClassName("dropdown-content-right");
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show-dropdown')) {
                openDropdown.classList.remove('show-dropdown');
            }
        }
    }
}

</script>
