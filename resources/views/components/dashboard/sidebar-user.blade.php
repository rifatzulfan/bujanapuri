 <!-- Sidebar -->
 <div id="sidebar-wrapper">
     <ul class="sidebar-nav">
         <li class="sidebar-brand">
             <a style="padding: 0 !important" href="/">
                 <img src="{{asset('images/logo-black.svg')}}" style="width: 100%" alt="" /></a>
         </li>
         <div class="divider">
             <div class="rectangle"></div>
         </div>
         <div class="title-section">
             <p>Daily Use</p>
         </div>
         <li>
             <a class="{{ request()->routeIs('peminjaman-user.*') ? 'active' : '' }}" href="{{route('peminjaman-user.index')}}">
                 <svg class="mr-2" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g clip-path="url(#clip0_38_4618)">
                         <path d="M21 21.5763H13V6.57629C13 5.78064 13.3161 5.01758 13.8787 4.45497C14.4413 3.89236 15.2044 3.57629 16 3.57629H21C21.2652 3.57629 21.5196 3.68165 21.7071 3.86919C21.8946 4.05672 22 4.31108 22 4.57629V20.5763C22 20.8415 21.8946 21.0959 21.7071 21.2834C21.5196 21.4709 21.2652 21.5763 21 21.5763ZM11 21.5763H3C2.73478 21.5763 2.48043 21.4709 2.29289 21.2834C2.10536 21.0959 2 20.8415 2 20.5763V4.57629C2 4.31108 2.10536 4.05672 2.29289 3.86919C2.48043 3.68165 2.73478 3.57629 3 3.57629H8C8.79565 3.57629 9.55871 3.89236 10.1213 4.45497C10.6839 5.01758 11 5.78064 11 6.57629V21.5763ZM11 21.5763H13V23.5763H11V21.5763Z" fill="#0B5EB1" />
                     </g>
                     <defs>
                         <clipPath id="clip0_38_4618">
                             <rect width="25" height="25" fill="white" transform="translate(0 0.576294)" />
                         </clipPath>
                     </defs>
                 </svg>

                 Peminjaman</a>
         </li>
         <li>
             <a class="{{ request()->routeIs('transaksi-user.*') ? 'active' : '' }}" href="{{route('transaksi-user.index')}}">
                 <svg class="mr-2" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M16.191 2.57629C19.28 2.57629 21 4.35629 21 7.40629V17.7363C21 20.8363 19.28 22.5763 16.191 22.5763H7.81C4.77 22.5763 3 20.8363 3 17.7363V7.40629C3 4.35629 4.77 2.57629 7.81 2.57629H16.191ZM8.08 16.3163C7.78 16.2863 7.49 16.4263 7.33 16.6863C7.17 16.9363 7.17 17.2663 7.33 17.5263C7.49 17.7763 7.78 17.9263 8.08 17.8863H15.92C16.319 17.8463 16.62 17.5053 16.62 17.1063C16.62 16.6963 16.319 16.3563 15.92 16.3163H8.08ZM15.92 11.7553H8.08C7.649 11.7553 7.3 12.1063 7.3 12.5363C7.3 12.9663 7.649 13.3163 8.08 13.3163H15.92C16.35 13.3163 16.7 12.9663 16.7 12.5363C16.7 12.1063 16.35 11.7553 15.92 11.7553ZM11.069 7.22629H8.08V7.23629C7.649 7.23629 7.3 7.58629 7.3 8.01629C7.3 8.44629 7.649 8.79629 8.08 8.79629H11.069C11.5 8.79629 11.85 8.44629 11.85 8.00529C11.85 7.57629 11.5 7.22629 11.069 7.22629Z" fill="#0B5EB1" />
                 </svg>

                 Transaksi</a>
         </li>
     </ul>
 </div>
 <!-- /#sidebar-wrapper -->