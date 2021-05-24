<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Dapatkan Penawaran</h2>
          <p>Segera dapatkan Baby Sitter yang sesuai dengan keinginan Anda. Lakukan pemesanan dengan mengisi form di bawah ini.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Nomor Telepon" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Tanggal Pemesanan" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Pilih Baby Sitter</option>
                <option value="Department 1">Baby Sitter 1</option>
                <option value="Department 2">Baby Sitter 2</option>
                <option value="Department 3">Baby Sitter 3</option>
                <option value="Department 3">Baby Sitter 4</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Pesan (Optional)"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Pemesanan Anda telah berhasil terkirim, Terima Kasih!</div>
          </div>
          <div class="text-center"><button type="submit">Pesan Sekarang Juga</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->