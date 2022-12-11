<?php

return [
    'invalid_vat_format' => 'ID NPWP yang diberikan memiliki format yang salah',
    'security-warning' => 'Ditemukan aktivitas yang mencurigakan!!!',
    'nothing-to-delete' => 'Tidak ada untuk dihapus',

    'layouts' => [
        'my-account' => 'Akun Saya',
        'profile' => 'Profil',
        'address' => 'Alamat',
        'reviews' => 'Review',
        'wishlist' => 'Wishlist',
        'orders' => 'Order',
        'downloadable-products' => 'Produk Dapat Didownload'
    ],

    'common' => [
        'error' => 'Ada yang tidak beres, coba lagi nanti.',
        'image-upload-limit' => 'Ukan maksimal gambar 2MB',
        'no-result-found' => 'Kami tidak dapat menemukan catatan apa pun.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Home',
        'featured-products' => 'Produk Unggulan',
        'new-products' => 'Produk Baru',
        'verify-email' => 'Verifikasi akun email Anda',
        'resend-verify-email' => 'Kirim Ulang Email Verifikasi'
    ],

    'header' => [
        'title' => 'Akun',
        'dropdown-text' => 'Klola Cart, Order & Wishlist',
        'sign-in' => 'Sign In',
        'sign-up' => 'Sign Up',
        'account' => 'Akun',
        'cart' => 'Keranjang',
        'profile' => 'Profil',
        'wishlist' => 'Wishlist',
        'cart' => 'Keranjang',
        'logout' => 'Logout',
        'search-text' => 'Cari produk disini'
    ],

    'minicart' => [
        'view-cart' => 'Lihat Keranjang Belanja',
        'checkout' => 'Checkout',
        'cart' => 'Keranjang',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Subscribe Newsletter',
        'subscribe' => 'Subscribe',
        'locale' => 'Negara',
        'currency' => 'Mata Uang',
    ],

    'subscription' => [
        'unsubscribe' => 'Unsubcribe',
        'subscribe' => 'Subscribe',
        'subscribed' => 'Anda sekarang berlangganan email langganan.',
        'not-subscribed' => 'Anda tidak dapat berlangganan email langganan, coba lagi nanti.',
        'already' => 'Anda sudah berlangganan daftar langganan kami.',
        'unsubscribed' => 'Anda berhenti berlangganan email langganan.',
        'already-unsub' => 'Anda sudah berhenti berlangganan.',
        'not-subscribed' => 'Kesalahan! Email tidak dapat dikirim saat ini, coba lagi nanti.'
    ],

    'search' => [
        'no-results' => 'Tidak Ada Hasil Ditemukan',
        'page-title' => config('app.name') . ' - Cari',
        'found-results' => 'Hasil Pencarian Ditemukan',
        'found-result' => 'Hasil Pencarian Ditemukan',
        'analysed-keywords' => 'Analisa Kata Kuncu',
        'image-search-option' => 'Opsi Pencarian Gambar'
    ],

    'reviews' => [
        'title' => 'Judu;',
        'add-review-page-title' => 'Tambah Review',
        'write-review' => 'Tulis review',
        'review-title' => 'Beri review Anda judul',
        'product-review-page-title' => 'Produk Review',
        'rating-reviews' => 'Rating & Review',
        'submit' => 'KIRIM',
        'delete-all' => 'Semua review berhasil dihapus',
        'ratingreviews' => ':rating Ratings & :review Review',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'bintang',
        'name' => 'Nama',
    ],
    
    'customer' => [
        'compare'           => [
            'text'                  => 'Bandingkan',
            'compare_similar_items' => 'Bandingkan Item yang Sama',
            'add-tooltip'           => 'Tambah produk ke daftar banding',
            'added'                 => 'Item berhasil ditambahkan ke daftar banding',
            'already_added'         => 'Item sudah ditambahkan ke daftar banding',
            'removed'               => 'Item berhasil dihapus dari daftar banding',
            'removed-all'           => 'Semua item berhasil dihapus dari daftar banding',
            'empty-text'            => 'Anda tidak memiliki item di daftar banding',
            'product_image'         => 'Gambar Produk',
            'actions'               => 'Aksi',
        ],

        'signup-text' => [
            'account_exists' => 'Already have an account',
            'title' => 'Sign In'
        ],

        'signup-form' => [
            'page-title' => 'Buat Akun Pelanggan Baru',
            'title' => 'Sign Up',
            'firstname' => 'Nama Depan',
            'lastname' => 'Nama Belakang',
            'email' => 'Email',
            'password' => 'Password',
            'confirm_pass' => 'Konfirmasi Password',
            'button_title' => 'Daftar',
            'agree' => 'Stuju',
            'terms' => 'Persyaratan',
            'conditions' => 'Kondisi',
            'using' => 'dengan menggunakan situs web ini',
            'agreement' => 'Persetujuan',
            'subscribe-to-newsletter' => 'Berlangganan newsletter',
            'success' => 'Akun berhasil dibuat.',
            'success-verify' => 'Akun berhasil dibuat, email telah dikirim untuk verifikasi.',
            'success-verify-email-unsent' => 'Akun berhasil dibuat, tetapi email verifikasi tidak terkirim.',
            'failed' => 'Error! Tidak dapat membuat akun Anda, tolong coba lagi nanti.',
            'already-verified' => 'Akun Anda sudah diverifikasi Atau coba kirim email verifikasi baru lagi.',
            'verification-not-sent' => 'Error! Masalah dalam mengirim email verifikasi, tolong coba lagi nanti.',
            'verification-sent' => 'Email verifikasi terkirim',
            'verified' => 'Aku anda berhasil diverifikasi, coba log in sekarang.',
            'verify-failed' => 'Kami tidak dapat meverifikasi akun Anda.',
            'dont-have-account' => 'Anda belum memiliki akun.',
            'customer-registration' => 'Registrasi Pelanggan Berhasil'
        ],

        'login-text' => [
            'no_account' => 'Tidak punya akun',
            'title' => 'Sign Up',
        ],

        'login-form' => [
            'page-title' => 'Login Pelanggan',
            'title' => 'Sign In',
            'email' => 'Email',
            'password' => 'Password',
            'forgot_pass' => 'Lupa Password?',
            'button_title' => 'Sign In',
            'remember' => 'Ingat Saya',
            'footer' => '© Copyright :year Webkul Software, All rights reserved',
            'invalid-creds' => 'Harap periksa kredensial Anda dan coba lagi.',
            'verify-first' => 'Verifikasi akun email Anda terlebih dahulu.',
            'not-activated' => 'Aktivasi Anda meminta persetujuan admin',
            'resend-verification' => 'Kirim verifikasi mail lagi'
        ],

        'forgot-password' => [
            'title' => 'Pulihkan Kata Sandi',
            'email' => 'Email',
            'submit' => 'Kirim Email Reset Password',
            'page_title' => 'Lupa password Anda ?'
        ],

        'reset-password' => [
            'title' => 'Reset Password',
            'email' => 'Email Terdaftar',
            'password' => 'Password',
            'confirm-password' => 'Konfirmasi Password',
            'back-link-title' => 'Kembali ke Sign In',
            'submit-btn-title' => 'Reset Password'
        ],

        'account' => [
            'dashboard' => 'Edit Profil',
            'menu' => 'Menu',

            'general' => [
                'no' => 'Tidak',
                'yes' => 'Ya',
            ],

            'profile' => [
                'index' => [
                    'page-title' => 'Profil',
                    'title' => 'Profil',
                    'edit' => 'Edit',
                ],

                'edit-success' => 'Profil berhasil diperbarui.',
                'edit-fail' => 'Error! Profil tidak dapat diperbarui, coba lagi nanti.',
                'unmatch' => 'Password tidak cocok.',

                'fname' => 'Nama Depan',
                'lname' => 'Nama Belakang',
                'gender' => 'Jenis Kelamin',
                'other' => 'Lainya',
                'male' => 'Pria',
                'female' => 'Perempuan',
                'dob' => 'Tanggal Lahir',
                'phone' => 'Phone',
                'email' => 'Email',
                'opassword' => 'Password Lama',
                'password' => 'Password',
                'cpassword' => 'Konfirmasi Password',
                'submit' => 'Perbarui Profil',

                'edit-profile' => [
                    'title' => 'Edit Profil',
                    'page-title' => 'Edit Profil'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Alamat',
                    'title' => 'Alamat',
                    'add' => 'Tambah Alamat',
                    'edit' => 'Edit',
                    'empty' => 'Anda tidak memiliki alamat yang disimpan di sini, coba buat dengan mengklik tombol tambah.',
                    'create' => 'Buat Alamat',
                    'delete' => 'Hapus',
                    'make-default' => 'Buat Default',
                    'default' => 'Default',
                    'contact' => 'Kontak',
                    'confirm-delete' =>  'Apa anda yakin untuk menghapus alamat ini?',
                    'default-delete' => 'Alamat default tidak dapat diganti.',
                    'enter-password' => 'Masukkan Password Anda.',
                ],

                'create' => [
                    'page-title' => 'Tambah Alamat',
                    'company_name' => 'Nama Perusahaan',
                    'first_name' => 'Nama Depan',
                    'last_name' => 'Nama Belakang',
                    'vat_id' => 'No NPWP',
                    'vat_help_note' => '[Note: Tambahkan kode \'ID\' sebelum nomer NPWP. Eg. ID11.111.111.1-111.000]',
                    'title' => 'Tambah Alamat',
                    'street-address' => 'Alamat Jalan',
                    'country' => 'Negara',
                    'state' => 'Provinsi',
                    'select-state' => 'Pilih Provinsi',
                    'city' => 'Kota/Kabupatan',
                    'postcode' => 'Kode POS',
                    'phone' => 'Telepon',
                    'submit' => 'Simpan Alamat',
                    'success' => 'Alamat berhasil ditambah.',
                    'error' => 'Alamat tidak dapat ditambah.'
                ],

                'edit' => [
                    'page-title' => 'Edit Alamat',
                    'company_name' => 'Nama Perusahaan',
                    'first_name' => 'Nama Depan',
                    'last_name' => 'Nama Belakang',
                    'vat_id' => 'No NPWP',
                    'title' => 'Edit Alamat',
                    'street-address' => 'Alamat Jalan',
                    'submit' => 'Simpan Alamat',
                    'success' => 'Alamat berhasil diperbarui.',
                ],
                'delete' => [
                    'success' => 'Alamat berhasil dihapus',
                    'failure' => 'Alamat tidak dapat dihapus',
                    'wrong-password' => 'Password Salah !'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Order',
                    'title' => 'Order',
                    'order_id' => 'Order ID',
                    'date' => 'Taggal',
                    'status' => 'Status',
                    'total' => 'Total',
                    'order_number' => 'No Order',
                    'processing' => 'Proses',
                    'completed' => 'Selesai',
                    'canceled' => 'Dibatalkan',
                    'closed' => 'Ditutup',
                    'pending' => 'Menunggu',
                    'pending-payment' => 'Mengunggu Pembayaran',
                    'fraud' => 'Penipuan'
                ],
                
                'view' => [
                    'page-tile' => 'Order #:order_id',
                    'info' => 'Informasi',
                    'placed-on' => 'Ditempatkan Pada',
                    'products-ordered' => 'Produk Dipesan',
                    'invoices' => 'Invoice',
                    'shipments' => 'Pengiriman',
                    'SKU' => 'SKU',
                    'product-name' => 'Nama',
                    'qty' => 'Jml',
                    'item-status' => 'Status Item',
                    'item-ordered' => 'Dipesan (:qty_ordered)',
                    'item-invoice' => 'Invoice (:qty_invoiced)',
                    'item-shipped' => 'dikirim (:qty_shipped)',
                    'item-canceled' => 'Dibatalkan (:qty_canceled)',
                    'item-refunded' => 'Dikembalikan (:qty_refunded)',
                    'price' => 'Harga',
                    'total' => 'Total',
                    'subtotal' => 'Subtotal',
                    'shipping-handling' => 'Pengiriman & Penanganan',
                    'tax' => 'Pajak',
                    'discount' => 'Diskon',
                    'tax-percent' => 'Persen Pajak',
                    'tax-amount' => 'Jumlah Pajak',
                    'discount-amount' => 'Jumlah Diskon',
                    'grand-total' => 'Grand Total',
                    'total-paid' => 'Total Dibauar',
                    'total-refunded' => 'Total Dikembalikan',
                    'total-due' => 'Total Jatuh Tempo',
                    'shipping-address' => 'Alamat Kirim',
                    'billing-address' => 'Alamat Tagih',
                    'shipping-method' => 'Metode Pengiriman',
                    'payment-method' => 'Metode Pembayaran',
                    'individual-invoice' => 'Invoice #:invoice_id',
                    'individual-shipment' => 'Pengiriman #:shipment_id',
                    'print' => 'Print',
                    'invoice-id' => 'Id Invoice',
                    'order-id' => 'Id Order',
                    'order-date' => 'Tanggal Order',
                    'bill-to' => 'Tagih ke',
                    'ship-to' => 'Dikirim ke',
                    'contact' => 'Kontak',
                    'refunds' => 'Pengembalian',
                    'individual-refund' => 'Pengembalian #:refund_id',
                    'adjustment-refund' => 'Penyesuaian Pengembalian',
                    'adjustment-fee' => 'Biaya Penyesuaian',
                    'cancel-btn-title' => 'Batal',
                    'tracking-number' => 'Tracking Number',
                    'cancel-confirm-msg' => 'Apa anda yakin untuk membatalkan order ini ?'
                ]
            ],
            
            'wishlist' => [
                'page-title' => 'Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Hapus Semua',
                'moveall' => 'Pindahkan Semua Produk Ke Keranjang',
                'move-to-cart' => 'Pindah ke Keranjang',
                'error' => 'Tidak dapat menambahkan produk ke wishlist karena masalah yang tidak diketahui, silakan periksa lagi nanti',
                'add' => 'Item berhasil ditambahkan ke wishlist',
                'remove' => 'Item berhasil dihapus dari wishlist',
                'add-wishlist-text'     => 'Tambah produk ke wishlist',
                'remove-wishlist-text'  => 'Hapus produk dari wishlist',
                'moved' => 'Item berhasil dipindahkan ke keranjang',
                'option-missing' => 'Pilihan produk tidak ada, jadi item tidak dapat dipindahkan ke wishlist.',
                'move-error' => 'Item tidak dapat dipindahkan ke wishlist, Silakan coba lagi nanti',
                'success' => 'Item berhasil ditambahkan ke wishlist',
                'failure' => 'Item tidak dapat dipindahkan ke wishlist, Silakan coba lagi nanti',
                'already' => 'Item sudah ada di wishlist Anda',
                'removed' => 'Item berhasil dihapus dari wishlist',
                'remove-fail' => 'Item tidak dapat dihapus dari wishlist, Silakan coba lagi nanti',
                'empty' => 'Anda tidak memiliki item di wishlist',
                'remove-all-success' => 'Semua item dari wishlist Anda telah dihapus',
            ],

            'downloadable_products' => [
                'title' => 'Produk Bisa Download',
                'order-id' => 'Order Id',
                'date' => 'Tanggal',
                'name' => 'Judul',
                'status' => 'Status',
                'pending' => 'Tertunda',
                'available' => 'Tersedia',
                'expired' => 'Kadaluarsa',
                'remaining-downloads' => 'Sisa Download',
                'unlimited' => 'Unlimited',
                'download-error' => 'Link download ini telah kadaluarsa',
                'payment-error' => 'Pembayaran belum dilakukan untuk download ini.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Review',
                    'page-title' => 'Review'
                ],

                'view' => [
                    'page-tile' => 'Review #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Shop By',
        'price-label' => 'Serendah',
        'remove-filter-link-title' => 'Bersihkan Semua',
        'filter-to' => 'ke',
        'sort-by' => 'Sortir dengan',
        'from-a-z' => 'Dari A-Z',
        'from-z-a' => 'Dari Z-A',
        'newest-first' => 'Terbaru Dulu',
        'oldest-first' => 'Terlama Dulu',
        'cheapest-first' => 'Termurah Dulu',
        'expensive-first' => 'Termahal Dulu',
        'show' => 'Tampilkan',
        'pager-info' => 'Menampilkan :showing dari :total Item',
        'description' => 'Deskripsi',
        'specification' => 'Spesifikasi',
        'total-reviews' => ':total Review',
        'total-rating' => ':total_rating Rating & :total_reviews Review',
        'by' => 'Oleh :name',
        'up-sell-title' => 'Kami menemukan produk lain yang mungkin Anda suka!',
        'related-product-title' => 'Produk terkait',
        'cross-sell-title' => 'Lebih banyak pilihan',
        'reviews-title' => 'Rating & Review',
        'write-review-btn' => 'Tulis Review',
        'choose-option' => 'Pilih opsi',
        'sale' => 'Sale',
        'new' => 'New',
        'empty' => 'Tidak ada produk yang tersedia dalam kategori ini',
        'add-to-cart' => 'Tambah ke Keranjang',
        'book-now' => 'Pesan Sekarang',
        'buy-now' => 'Beli Sekarang',
        'whoops' => 'Whoops!',
        'quantity' => 'Kuantitas',
        'in-stock' => 'Stok Tersedia',
        'out-of-stock' => 'Stok Habis',
        'view-all' => 'Tampilkan Semua',
        'select-above-options' => 'Harap pilih opsi di atas terlebih dahulu.',
        'less-quantity' => 'Kuantitas tidak boleh kurang dari 1.',
        'samples' => 'Sampel',
        'links' => 'Link',
        'sample' => 'Sample',
        'name' => 'Nama',
        'qty' => 'Jml',
        'starting-at' => 'Mulai dari',
        'customize-options' => 'Sesuaikan Opsi',
        'choose-selection' => 'Pilih satu pilihan',
        'your-customization' => 'Kustomisasi Anda',
        'total-amount' => 'Total Jumlah',
        'none' => 'None',
        'available-for-order' => 'Tersedia untuk Pemesanan',
        'settings' => 'Pengaturan',
        'compare_options' => 'Bandingkan Opsi',
        'wishlist-options' => 'Wishlist Optsi',
        'offers' => 'Beli :qty untuk harga :price masing - masing dan hemat :discount%',
    ],

    // 'reviews' => [
    //     'empty' => 'Anda Belum Mengulas Produk Apa Pun'
    // ]

    'buynow' => [
        'no-options' => 'Pilih opsi sebelum membeli produk ini.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Beberapa field yang wajib, hilang pada produk ini.',
                'missing_options' => 'Pilihan tidak ada untuk produk ini.',
                'missing_links' => 'Link download tidak ada pada produk ini.',
                'qty_missing' => 'Setidaknya satu produk harus memiliki lebih dari 1 kuantitas.',
                'qty_impossible' => 'Tidak dapat menambahkan lebih dari satu produk ini ke keranjang.'
            ],
            'create-error' => 'Mengalami beberapa masalah saat membuat keranjang.',
            'title' => 'Keranjang Belanja',
            'empty' => 'Keranjang belanja anda kosong',
            'update-cart' => 'Perbarui Keranjang',
            'continue-shopping' => 'Lanjutkan Belanja',
            'proceed-to-checkout' => 'Lanjutkan ke Pembayaran',
            'remove' => 'Hapus',
            'remove-link' => 'Hapus',
            'move-to-wishlist' => 'Pindah ke Wishlist',
            'move-to-wishlist-success' => 'Item berhasil dipindahkan ke wishlist.',
            'move-to-wishlist-error' => 'Tidak dapat memindahkan item ke wishlist, coba lagi nanti.',
            'add-config-warning' => 'Pilih opsi sebelum menambahkan ke keranjang.',
            'quantity' => [
                'quantity' => 'Kuantitas',
                'success' => 'Item keranjang berhasil diperbarui.',
                'illegal' => 'Kuantitas tidak boleh kurang dari satu.',
                'inventory_warning' => 'Kuantitas yang diminta tidak tersedia, coba lagi nanti.',
                'error' => 'Tidak dapat memperbarui item saat ini, coba lagi nanti.'
            ],

            'item' => [
                'error_remove' => 'Tidak ada item untuk dihapus dari keranjang.',
                'success' => 'Item berhasil ditambahkan ke keranjang.',
                'success-remove' => 'Item berhasil dihapus dari keranjang.',
                'error-add' => 'Item tidak dapat ditambahkan ke keranjang, coba lagi nanti.',
                'inactive' => 'Item tidak aktif dan telah dihapus dari keranjang.',
                'inactive-add' => 'Item tidak aktif tidak dapat ditambahkan ke keranjang.',
            ],
            'quantity-error' => 'Kuantitas yang diminta tidak tersedia.',
            'cart-subtotal' => 'Subtotal Keranjang',
            'cart-remove-action' => 'Apakah Anda benar-benar ingin melakukan ini ?',
            'partial-cart-update' => 'Hanya beberapa produk yang diperbarui',
            'link-missing' => '',
            'event' => [
                'expired' => 'Event ini telah kadaluwarsa.'
            ],
            'minimum-order-message' => 'Jumlah minimal order adalah :amount'
        ],

        'onepage' => [
            'title' => 'Checkout',
            'information' => 'Informasi',
            'shipping' => 'Pengiriman',
            'payment' => 'Pembayaran',
            'complete' => 'Lengkap',
            'review' => 'Review',
            'billing-address' => 'Alamat Tagih',
            'sign-in' => 'Sign In',
            'company-name' => 'Nama Perusahaan',
            'first-name' => 'Nama Depan',
            'last-name' => 'Nama Belakang',
            'email' => 'Email',
            'address1' => 'Jalan',
            'city' => 'Kota/Kabupaten',
            'state' => 'Provinsi',
            'select-state' => 'Pilih provinsi',
            'postcode' => 'Kode Pos',
            'phone' => 'Telepon',
            'country' => 'Negara',
            'order-summary' => 'Ringkasan Order',
            'shipping-address' => 'Alamat Kirim',
            'use_for_shipping' => 'Kirim ke alamat ini',
            'continue' => 'Lanjutkan',
            'shipping-method' => 'Pilih Metode Pengiriman',
            'payment-methods' => 'Pilih Metode Pembayaran',
            'payment-method' => 'Metode Pembayaran',
            'summary' => 'Ringkasan Order',
            'price' => 'Harga',
            'quantity' => 'Kuantitas',
            'shipping-address' => 'Alamat Pengiriman',
            'billing-address' => 'Alamat Tagihan',
            'contact' => 'Kontak',
            'place-order' => 'Pesan Sekarang',
            'new-address' => 'Tambah Alamat Baru',
            'save_as_address' => 'Simpan alamat ini',
            'apply-coupon' => 'Gunakan Kupon',
            'amt-payable' => 'Jumlah Dibayar',
            'got' => 'Dapat',
            'free' => 'Gratis',
            'coupon-used' => 'Kupon Digunakan',
            'applied' => 'Terapkan',
            'back' => 'Kembali',
            'cash-desc' => 'Cash On Delivery',
            'money-desc' => 'Transfer Bank',
            'paypal-desc' => 'Paypal',
            'free-desc' => 'Ini adalah pengiriman gratis',
            'flat-desc' => 'Ini adalah tarif tetap',
            'password' => 'Password',
            'login-exist-message' => 'Anda sudah memiliki akun, masuk atau lanjutkan sebagai tamu.',
            'enter-coupon-code' => 'Masukan Kode Kupon'
        ],

        'total' => [
            'order-summary' => 'Ringkasan Order',
            'sub-total' => 'Item',
            'grand-total' => 'Grand Total',
            'delivery-charges' => 'Biaya Pengiriman',
            'tax' => 'Pajak',
            'discount' => 'Diskon',
            'price' => 'harga',
            'disc-amount' => 'Jumlah diskon',
            'new-grand-total' => 'Grand Total Baru',
            'coupon' => 'Kupon',
            'coupon-applied' => 'Gunakan Kupon',
            'remove-coupon' => 'Hapus Kupom',
            'cannot-apply-coupon' => 'Tidak Dapat Menggunakan Kupon',
            'invalid-coupon' => 'Kode kupon salah.',
            'success-coupon' => 'Kode kupon berhasil digunakan.',
            'coupon-apply-issue' => 'Kode koupon tidak dapat digunakan.'
        ],

        'success' => [
            'title' => 'Order berhasil dibuat',
            'thanks' => 'Terimakasih untuk order Anda!',
            'order-id-info' => 'Order id Anda adalah #:order_id',
            'info' => 'Kami akan mengirimkan email kepada Anda, detail pesanan Anda, dan informasi pelacakan'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Konfirmasi Order Baru',
            'heading' => 'Konfirmasi Order!',
            'dear' => 'Yth :customer_name',
            'dear-admin' => 'Yth :admin_name',
            'greeting' => 'Terimakasih untuk Order :order_id Anda pada :created_at',
            'greeting-admin' => 'Id Order :order_id pada :created_at',
            'summary' => 'Ringkasan Order',
            'shipping-address' => 'Alamat Pengiriman',
            'billing-address' => 'Alamat Tagihan',
            'contact' => 'Kontak',
            'shipping' => 'Metode Pengiriman',
            'payment' => 'Metode Pembayaran',
            'price' => 'Harga',
            'quantity' => 'Kuantitas',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Pengiriman & Penaganganan',
            'tax' => 'Pajak',
            'discount' => 'Diskon',
            'grand-total' => 'Grand Total',
            'final-summary' => 'Terima kasih telah menunjukkan minat Anda pada toko kami, Kami akan mengirim tracking number setelah pengiriman',
            'help' => 'Jika anda membutuhkan bantuan ada dapat mengirim email ke :support_email',
            'thanks' => 'Terimakasih!',

            'comment' => [
                'subject' => 'Komentar baru ditambahkan ke order #:order_id Anda',
                'dear' => 'Yth :customer_name',
                'final-summary' => 'Terima kasih telah menunjukkan minat Anda pada toko kami',
                'help' => 'Jika anda membutuhkan bantuan ada dapat mengirim email ke :support_email',
                'thanks' => 'Terimakasih!',
            ],

            'cancel' => [
                'subject' => 'Konfirmasi Pembatalan Order',
                'heading' => 'Order Dibatalkan',
                'dear' => 'Yth :customer_name',
                'greeting' => 'Order Anda dengan id :order_id pada tanggal :created_at telah dibatalkan',
                'summary' => 'Ringkasan Order',
                'shipping-address' => 'Alamat Pengiriman',
                'billing-address' => 'Alamat Tagihan',
                'contact' => 'Kontak',
                'shipping' => 'Metode Pengiriman',
                'payment' => 'Metode Pembayaran',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Pengiriman & Penanganan',
                'tax' => 'Pajak',
                'discount' => 'Diskon',
                'grand-total' => 'Grand Total',
                'final-summary' => 'Terima kasih telah menunjukkan minat Anda pada toko kami',
                'help' => 'Jika anda membutuhkan bantuan ada dapat mengirim email ke :support_email',
                'thanks' => 'Terimakasih!',
            ]
        ],

        'invoice' => [
            'heading' => 'Invoice Anda #:invoice_id untuk Order #:order_id',
            'subject' => 'Invoice untuk order #:order_id Anda',
            'summary' => 'Ringkasan Invoice',
        ],

        'shipment' => [
            'heading' => 'Pengiriman #:shipment_id telah dibuat untuk Order #:order_id',
            'inventory-heading' => 'Pengiriman baru #:shipment_id telah dibuat untuk Order #:order_id',
            'subject' => 'Pengiriman untuk Order Anda #:order_id',
            'inventory-subject' => 'Pengiriman baru telah dibuat untuk Order #:order_id',
            'summary' => 'Ringkasan Pengiriman',
            'carrier' => 'Kurir',
            'tracking-number' => 'Tracking Number',
            'greeting' => 'Order :order_id telah dilakukan pada :created_at',
        ],

        'refund' => [
            'heading' => 'Refund Anda #:refund_id untuk Order #:order_id',
            'subject' => 'Refund dari order #:order_id Anda',
            'summary' => 'Ringkasan Refund',
            'adjustment-refund' => 'Adjustment Refund',
            'adjustment-fee' => 'Adjustment Fee'
        ],

        'forget-password' => [
            'subject' => 'Reset Password Pelanggan',
            'dear' => 'Yth :name',
            'info' => 'Anda menerima email ini karena kami menerima permintaan pengaturan ulang kata sandi untuk akun Anda',
            'reset-password' => 'Reset Password',
            'final-summary' => 'Jika Anda tidak meminta pengaturan ulang kata sandi, tidak ada tindakan lebih lanjut yang diperlukan',
            'thanks' => 'Terimakasih!'
        ],

        'update-password' => [
            'subject' => 'Password diperbarui',
            'dear' => 'Yth :name',
            'info' => 'Anda menerima email ini karena anda memperbarui password Anda.',
            'thanks' => 'Terimakasih!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Dear :customer_name',
                'username-email' => 'UserName/Email',
                'subject' => 'Registrasi pelanggan baru',
                'password' => 'Password',
                'summary' => 'Akun Anda telah berhasil dibuat
                Detail akun Anda dibawah ini: ',
                'thanks' => 'Terimaksih!',
            ],

            'registration' => [
                'subject' => 'Registrasi pelanggan baru',
                'customer-registration' => 'Pendaftaran pelanggan berhasil.',
                'dear' => 'Yth :customer_name',
                'greeting' => 'Slamat datang dan terimakasih atas registrasinya!',
                'summary' => 'Akun Anda telah berhasil dibuat dan Anda dapat login menggunakan alamat email dan kata sandi Anda. Setelah masuk, Anda dapat mengakses layanan lain termasuk melihat order sebelumnya, whislist, dan mengedit informasi akun Anda.',
                'thanks' => 'Terimakasih!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Verifikasi Email',
                'subject' => 'Verifikasi Email',
                'verify' => 'Verifikasi akun Anda',
                'summary' => 'Ini adalah email untuk memverifikasi bahwa alamat email yang Anda masukkan adalah milik Anda. Silakan klik tombol Verifikasi Akun Anda di bawah ini untuk memverifikasi akun Anda.'
            ],

            'subscription' => [
                'subject' => 'Email Berlangganan',
                'greeting' => ' Slamat datang ' . config('app.name') . ' - Berlangganan Email',
                'unsubscribe' => 'Berhenti langganan',
                'summary' => 'Terima kasih telah menerima kami ke kotak masuk Anda. Anda sudah lama tidak membaca email ' . config('app.name') . ', dan kami tidak ingin memenuhi kotak masuk Anda. Jika Anda masih tidak ingin menerima berita pemasaran email terbaru maka pastikan klik tombol di bawah ini.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Webkul Software, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name berhasil diuat.',
        'update-success' => ':name berhasil diperbarui.',
        'delete-success' => ':name berhasil dihapus.',
        'submit-success' => ':name berhasil dikirim.'
    ],
];
