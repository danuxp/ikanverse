 <?= $this->include('template/header') ?>
 <!-- Content -->

 <div class="container-xxl">
   <div class="authentication-wrapper authentication-basic container-p-y">
     <div class="authentication-inner">
       <!-- Register -->
       <div class="card">
         <div class="card-body">
           <!-- Logo -->
           <div class="app-brand justify-content-center">
             <a href="index.html" class="app-brand-link gap-2">
               <span class="app-brand-logo demo">
                 <img src="<?= base_url() ?>/assets/img/favicon/Log1.png" alt="logo" width="170">
               </span>
               <!-- <span class="app-brand-text demo text-body fw-bolder">Sneat</span> -->
             </a>
           </div>
           <!-- /Logo -->
           <!-- <h4 class="mb-2">Welcome to Sneat! 👋</h4> -->
           <p class="mb-4 text-center">Silahkan <strong> Login </strong> terlebih dahulu!</p>

           <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
             <div class="mb-3">
               <label for="email" class="form-label">Username</label>
               <input type="text" class="form-control" id="email" name="email-username" placeholder="Enter your email or username" autofocus />
             </div>
             <div class="mb-3 form-password-toggle">
               <div class="d-flex justify-content-between">
                 <label class="form-label" for="password">Password</label>
                 <!-- <a href="auth-forgot-password-basic.html">
                   <small>Forgot Password?</small>
                 </a> -->
               </div>
               <div class="input-group input-group-merge">
                 <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                 <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
               </div>
             </div>
             <!-- <div class="mb-3">
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" id="remember-me" />
                 <label class="form-check-label" for="remember-me"> Remember Me </label>
               </div>
             </div> -->
             <div class="mb-3">
               <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
             </div>
           </form>

           <p class="text-center">
             <span>Belum Punya Akun ?</span>
             <a href="<?= base_url('registrasi') ?>">
               <span>Registrasi</span>
             </a>
           </p>
         </div>
       </div>
       <!-- /Register -->
     </div>
   </div>
 </div>

 <!-- / Content -->


 <?= $this->include('template/endbody') ?>