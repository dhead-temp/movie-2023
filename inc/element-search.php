 <div class="hero-search-box">
     <div class="hero-search-headding r-flex ali-c ">
         <span class="hero-search-text">Search Any Movie/WebSeries</span>

     </div>
     <form action="<?php echo $func_search_url; ?>" method="get" onsubmit="record('searched','no_info')">
         <input type="search" name="q" placeholder="Enter Any Movie/WebSeries/Serial" class="hero-search">
         <button class="hero-search-btn ali-c r-flex jut-c">
             <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M7.29167 6.41667H6.83083L6.6675 6.25917C7.25893 5.57318 7.58398 4.69741 7.58333 3.79167C7.58333 3.04175 7.36096 2.30867 6.94432 1.68513C6.52769 1.06159 5.93551 0.575607 5.24268 0.288625C4.54984 0.00164287 3.78746 -0.0734448 3.05195 0.0728575C2.31644 0.21916 1.64083 0.580281 1.11056 1.11056C0.580281 1.64083 0.21916 2.31644 0.0728575 3.05195C-0.0734448 3.78746 0.00164287 4.54984 0.288625 5.24268C0.575607 5.93551 1.06159 6.52769 1.68513 6.94432C2.30867 7.36096 3.04175 7.58333 3.79167 7.58333C4.73083 7.58333 5.59417 7.23917 6.25917 6.6675L6.41667 6.83083V7.29167L9.33333 10.2025L10.2025 9.33333L7.29167 6.41667ZM3.79167 6.41667C2.33917 6.41667 1.16667 5.24417 1.16667 3.79167C1.16667 2.33917 2.33917 1.16667 3.79167 1.16667C5.24417 1.16667 6.41667 2.33917 6.41667 3.79167C6.41667 5.24417 5.24417 6.41667 3.79167 6.41667Z" fill="white" />
             </svg>&nbsp;&nbsp;
             <span class="hero-search-btn-text cur">Search Now</span>
         </button>
     </form>
 </div>
