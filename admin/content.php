<?php

 error_reporting(0);
include "config/koneksi.php";

// Bagian Home

// Bagian Modul


$mod=$_GET[part];

if ($mod==''){
    include "modul/home/home.php";
}
// ============================================================================
// ============================================================================
// ============================================================================
elseif ($mod=='Susunan Pengurus'){

    include "modul/pengurus/pengurus.php";
}
elseif ($mod=='Tambah Susunan Pengurus'){

    include "modul/pengurus/tambah_pengurus.php";
}
elseif ($mod=='Edit Susunan Pengurus'){

    include "modul/pengurus/edit_pengurus.php";
// ============================================================================
// ============================================================================
// ============================================================================
}
elseif ($mod=='Kegiatan'){

    include "modul/kegiatan/kegiatan.php";
}

elseif ($mod=='Tambah Kegiatan'){

    include "modul/kegiatan/tambah_kegiatan.php";

}
elseif ($mod=='Edit Kegiatan'){

    include "modul/kegiatan/edit_kegiatan.php";

}
// ============================================================================
// ============================================================================
// ============================================================================

elseif ($mod=='Laporan Keuangan'){

    include "modul/keuangan/laporan.php";

}
elseif ($mod=='Tambah Laporan Keuangan'){

    include "modul/keuangan/tambah_laporan.php";

}
elseif ($mod=='Edit Laporan Keuangan'){

    include "modul/keuangan/edit_laporan.php";

}
// ============================================================================
// ============================================================================
// ============================================================================

elseif ($mod=='Donasi'){

    include "modul/donasi/donasi.php";
  
}



// ============================================================================
// ============================================================================
// ============================================================================
elseif ($mod=='Rekening Bank'){

    include "modul/rekening/rekening.php";
}
elseif ($mod=='Tambah Rekening Bank'){

    include "modul/rekening/tambah_rekening.php";
}
elseif ($mod=='Edit Rekening Bank'){

    include "modul/rekening/edit_rekening.php";
}
// ============================================================================
// ============================================================================
// ============================================================================

elseif ($mod=='Profile User'){

    include "modul/user/profile_user.php";
  
}
elseif ($mod=='Setting User'){

    include "modul/user/setting_user.php";
  
}


// ============================================================================
// ============================================================================
// ============================================================================

elseif ($mod=='Logout'){

    include "logout.php";
  
}





?>
