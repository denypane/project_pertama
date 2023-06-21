@extends('customer.layouts.app')

@section('content')
<div>
  <img src="{{ asset('images/to_customer/Profil.png') }}" alt="" class="img-profil">
</div>
<div class="menu-profil">
  <a href="#"><h3>Akun Saya</h3></a>
  <a href="#"><h4>Profil</h4></a>
  <a href="#"><h4 style="color: #FFA900;">Alamat</h4></a>
  <a href="#"><h4>Ubah Katasandi</h4></a>
</div>

<div class="alamat-profil">
  <div>
      <h3>Alamat</h3><br>
      <h4><span style="color: #000000; padding-right: 2px;">Meisya</span>| 089928819222</h4>
      <h4>Jalan Suka Maju No. 12</h4>
      <h4>MEDAN SELAYANG, KOTA MEDAN, SUMATRA UTARA, ID, 20121 </h4>
      <a href="#" class="link-ubah">Ubah</a>
  </div>
  <div class="btn-tambah-alamat">
      <button class="button">Tambah Alamat</button>
  </div>
</div>
<div class="popup-overlay">
  <div class="popup-content">
    <h2>Popup Content</h2>
    <p>This is the content of the popup.</p>
    <button class="button close-button">Close</button>
  </div>
</div>


<script>
  // Get references to the button and the popup overlay
  const openButton = document.querySelector('.button');
  const popupOverlay = document.querySelector('.popup-overlay');
  
  // Function to open the popup
  function openPopup() {
    popupOverlay.style.display = 'flex';
  }
  
  // Function to close the popup
  function closePopup() {
    popupOverlay.style.display = 'none';
  }
  
  // Attach click event listeners to the button and the close button
  openButton.addEventListener('click', openPopup);
  const closeButton = document.querySelector('.close-button');
  closeButton.addEventListener('click', closePopup);
</script>
  
<div class="space-content">
</div>
@endsection