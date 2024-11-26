<section class="contact-infos">
    <div class="container contact-infos--container">
        <div class="contact-infos--container--channels">
            <div class="contact">
                <ul class="items">
                    <?php
                    $args = array(
                        'name' => 'informacoes-gerais',
                        'post_type' => 'page',
                    );

                    $query = new WP_Query($args);
                    while ($query->have_posts()) :
                        $query->the_post();
                        $whatsapp = get_field('whatsapp');
                        $whatsappNumber = get_field('whatsappNumber');
                        $whatsappMessage = get_field('whatsappMessage');
                        $email = get_field('e-mail');
                        $phone = get_field('phone');
                        $instagram = get_field('instagram');
                        $facebook = get_field('facebook');
                        $address = get_field('address');
                    ?>
                        <li class="item scroll-effect">
                            <a href="mailto:<?php echo $email; ?>">
                                <svg width="20" height="20" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon">
                                    <path id="styled-element" d="M1.03461 9.37852L9.83007 15.4578C10.6141 15.9976 11.0062 16.2675 11.43 16.3723C11.8043 16.465 12.1947 16.465 12.5692 16.3723C12.9929 16.2675 13.385 15.9976 14.1691 15.4578L22.9646 9.37852M9.9199 1.89246L2.83106 6.48981C2.16259 6.92332 1.82836 7.14008 1.58593 7.4331C1.37137 7.69245 1.20993 7.99401 1.11136 8.31958C1 8.68742 1 9.09498 1 9.91014V17.9611C1 19.3749 1 20.0818 1.26643 20.6217C1.50078 21.0967 1.87473 21.4829 2.33469 21.7249C2.85758 22 3.54209 22 4.91111 22H19.0889C20.4579 22 21.1425 22 21.6653 21.7249C22.1253 21.4829 22.4993 21.0967 22.7336 20.6217C23 20.0818 23 19.3749 23 17.9611V9.91014C23 9.09498 23 8.68742 22.8887 8.31958C22.79 7.99401 22.6287 7.69245 22.4141 7.4331C22.1717 7.14008 21.8374 6.92332 21.169 6.48981L14.0801 1.89246C13.3256 1.40322 12.9484 1.1586 12.5438 1.06324C12.1858 0.978919 11.8142 0.978919 11.4562 1.06324C11.0516 1.1586 10.6744 1.40322 9.9199 1.89246Z" stroke="#750000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <?php echo $email ?>
                            </a>
                        </li>
                        <li class="item scroll-effect">
                            <a href="tel:<?php echo $phone ?>">
                                <svg class="icon" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path id="styled-element" d="M21 3.77778C21 13.2893 13.2893 21 3.77778 21C3.34864 21 2.92318 20.9843 2.50191 20.9534C2.01847 20.918 1.77673 20.9003 1.5567 20.7737C1.37446 20.6688 1.20162 20.4828 1.11028 20.2933C1 20.0647 1 19.7979 1 19.2644V16.1341C1 15.6854 1 15.4611 1.07383 15.2689C1.13906 15.099 1.24499 14.9478 1.38233 14.8284C1.53781 14.6933 1.74862 14.6167 2.17023 14.4633L5.73339 13.1677C6.22392 12.9893 6.46919 12.9001 6.70189 12.9152C6.90708 12.9286 7.10453 12.9987 7.27229 13.1176C7.46253 13.2523 7.59681 13.4761 7.86536 13.9238L8.77778 15.4444C11.7221 14.111 14.109 11.721 15.4444 8.77778L13.9238 7.86536C13.4761 7.59681 13.2523 7.46253 13.1176 7.27229C12.9987 7.10453 12.9286 6.90708 12.9152 6.70189C12.9001 6.46919 12.9893 6.22392 13.1677 5.73339L14.4633 2.17023C14.6167 1.74862 14.6933 1.53781 14.8284 1.38233C14.9478 1.24499 15.099 1.13906 15.2689 1.07383C15.4611 1 15.6854 1 16.1341 1H19.2644C19.7979 1 20.0647 1 20.2933 1.11028C20.4828 1.20162 20.6688 1.37446 20.7737 1.5567C20.9003 1.77674 20.918 2.01847 20.9534 2.50192C20.9843 2.92318 21 3.34864 21 3.77778Z" stroke="#750000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <?php echo $phone ?>
                            </a>
                        </li>
                        <li class="item scroll-effect">
                            <img src="<?php echo  get_template_directory_uri() . '/dist/icons/address-2.svg' ?>" alt="Vendatec" class="icon">
                            <?php echo $address ?>
                        </li>

                        <li class="item scroll-effect">
                            <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>">
                                <svg class="icon" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path id="styled-element" fill-rule="evenodd" clip-rule="evenodd" d="M13.5 2.25C7.28677 2.25 2.25 7.28677 2.25 13.5C2.25 15.345 2.6948 17.0883 3.48342 18.6265L2.27292 23.7108C2.23961 23.851 2.24274 23.9973 2.28201 24.136C2.32128 24.2746 2.39539 24.4009 2.49727 24.5027C2.59915 24.6046 2.72541 24.6787 2.86404 24.718C3.00267 24.7573 3.14904 24.7604 3.28922 24.7271L8.37352 23.5166C9.91167 24.3052 11.655 24.75 13.5 24.75C19.7132 24.75 24.75 19.7132 24.75 13.5C24.75 7.28677 19.7132 2.25 13.5 2.25ZM3.9375 13.5C3.9375 8.21883 8.21883 3.9375 13.5 3.9375C18.7812 3.9375 23.0625 8.21883 23.0625 13.5C23.0625 18.7812 18.7812 23.0625 13.5 23.0625C11.8288 23.0625 10.26 22.6346 8.89495 21.8828C8.71126 21.7817 8.49651 21.7526 8.29252 21.8011L4.23211 22.7679L5.19891 18.7075C5.24746 18.5035 5.21834 18.2887 5.1172 18.105C4.36542 16.7399 3.9375 15.1712 3.9375 13.5ZM10.4095 16.5905C12.0935 18.2744 14.3388 19.404 16.8435 19.6729C18.4995 19.8505 19.6875 18.4861 19.6875 17.0689V16.0851C19.6875 15.5118 19.5027 14.9538 19.1605 14.4938C18.8183 14.0339 18.3369 13.6965 17.7878 13.5318L17.7095 13.5083L17.6293 13.4925L16.5012 13.2704C16.1385 13.1765 15.76 13.1601 15.3905 13.2223C15.0209 13.2845 14.6687 13.424 14.3567 13.6315C13.9895 13.3422 13.6578 13.0105 13.3685 12.6433C13.5761 12.3313 13.7156 11.979 13.7778 11.6094C13.8401 11.2399 13.8237 10.8613 13.7298 10.4985L13.5073 9.37055L13.4916 9.29039L13.4681 9.21206C13.3034 8.66301 12.966 8.18169 12.5061 7.83951C12.0462 7.49732 11.4883 7.31252 10.915 7.3125H9.93094C8.51386 7.3125 7.14938 8.50022 7.32699 10.1564C7.59586 12.6609 8.72536 14.9065 10.4095 16.5905ZM15.1418 15.1591C15.2667 15.0342 15.423 14.9455 15.5943 14.9024C15.7655 14.8592 15.9452 14.8632 16.1144 14.914L17.3031 15.1481C17.5045 15.2086 17.6811 15.3325 17.8067 15.5012C17.9322 15.67 18 15.8748 18 16.0851V17.0689C18 17.6091 17.5607 18.0526 17.0236 17.9949C15.6818 17.8516 14.3895 17.4078 13.2427 16.6967C12.6478 16.3281 12.0976 15.8921 11.6028 15.3972C11.1079 14.9024 10.6719 14.3522 10.3033 13.7573C9.5922 12.6104 9.14848 11.3181 9.00506 9.97622C8.94741 9.43917 9.39094 9 9.93094 9H10.9149C11.1252 9.00006 11.3299 9.0679 11.4986 9.19347C11.6673 9.31903 11.791 9.49564 11.8515 9.69708L12.0859 10.8855C12.1366 11.0547 12.1407 11.2344 12.0975 11.4057C12.0543 11.5769 11.9656 11.7333 11.8408 11.8582L11.6833 12.0157C11.579 12.1195 11.5041 12.249 11.466 12.391C11.4137 12.5883 11.4373 12.8018 11.5508 12.9849C11.8596 13.4836 12.2251 13.945 12.6399 14.3598C13.0548 14.7747 13.5162 15.1402 14.015 15.4491C14.1981 15.5624 14.4114 15.5862 14.6088 15.5339C14.7509 15.4957 14.8804 15.4208 14.9842 15.3166L15.1418 15.1591Z" fill="#750000" />
                                </svg>
                                <?php echo $whatsapp ?>
                            </a>
                        </li>
                        <li class="item scroll-effect">
                            <a href="<?php echo $instagram ?>">
                                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.20907 5.23772C6.59639 5.23772 4.489 7.34558 4.489 9.95884C4.489 12.5721 6.59639 14.68 9.20907 14.68C11.8217 14.68 13.9291 12.5721 13.9291 9.95884C13.9291 7.34558 11.8217 5.23772 9.20907 5.23772ZM9.20907 13.0282C7.52069 13.0282 6.1404 11.6517 6.1404 9.95884C6.1404 8.26598 7.51658 6.8895 9.20907 6.8895C10.9016 6.8895 12.2777 8.26598 12.2777 9.95884C12.2777 11.6517 10.8974 13.0282 9.20907 13.0282ZM15.2231 5.0446C15.2231 5.65683 14.7302 6.14579 14.1222 6.14579C13.5101 6.14579 13.0213 5.65272 13.0213 5.0446C13.0213 4.43648 13.5142 3.94342 14.1222 3.94342C14.7302 3.94342 15.2231 4.43648 15.2231 5.0446ZM18.3493 6.16222C18.2795 4.68713 17.9426 3.3805 16.8622 2.30397C15.7859 1.22744 14.4796 0.890506 13.0048 0.816546C11.4849 0.730259 6.92914 0.730259 5.40918 0.816546C3.93853 0.886397 2.63219 1.22333 1.55179 2.29986C0.471391 3.37639 0.138644 4.68302 0.0647007 6.15811C-0.0215669 7.6784 -0.0215669 12.2352 0.0647007 13.7555C0.134536 15.2306 0.471391 16.5372 1.55179 17.6137C2.63219 18.6902 3.93442 19.0272 5.40918 19.1011C6.92914 19.1874 11.4849 19.1874 13.0048 19.1011C14.4796 19.0313 15.7859 18.6944 16.8622 17.6137C17.9385 16.5372 18.2754 15.2306 18.3493 13.7555C18.4356 12.2352 18.4356 7.68251 18.3493 6.16222ZM16.3857 15.3867C16.0653 16.192 15.445 16.8125 14.6357 17.1371C13.4239 17.6178 10.5483 17.5069 9.20907 17.5069C7.86986 17.5069 4.99017 17.6137 3.78242 17.1371C2.97726 16.8166 2.35695 16.1961 2.03242 15.3867C1.55179 14.1746 1.66271 11.2983 1.66271 9.95884C1.66271 8.61934 1.5559 5.73901 2.03242 4.53099C2.35285 3.72565 2.97315 3.1052 3.78242 2.7806C4.99428 2.29986 7.86986 2.4108 9.20907 2.4108C10.5483 2.4108 13.428 2.30397 14.6357 2.7806C15.4409 3.10109 16.0612 3.72154 16.3857 4.53099C16.8663 5.74311 16.7554 8.61934 16.7554 9.95884C16.7554 11.2983 16.8663 14.1787 16.3857 15.3867Z" fill="#750000" />
                                </svg>

                                <?php echo $instagram ?>
                            </a>
                        </li>
                        <li class="item scroll-effect">
                            <a href="<?php echo $facebook ?>">
                                <svg width="22" height="22" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2495_185)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44.7885 25.1775L43.8226 32.2281H32.2209V56.9049H25.1704V32.2281H14.5946V25.1775H25.1704V18.7157C25.1704 9.75099 30.6769 3.95543 39.2045 3.95543C42.8566 3.95543 45.134 4.14933 46.4489 4.32558L46.3466 11.0025L40.9248 11.013C40.7767 10.9989 37.2444 10.724 34.6956 13.0647C33.0529 14.57 32.2209 16.7345 32.2209 19.4913V25.1776H44.7885V25.1775ZM37.0611 15.677C38.4501 14.3832 40.6146 14.5242 40.7732 14.5312L49.8191 14.5277L50.0129 1.48071L48.6522 1.1458C47.7779 0.930801 45.1022 0.430176 39.2045 0.430176C28.7027 0.430176 21.6451 7.78036 21.6451 18.7157V21.6523H11.0693V35.7533H21.6451V60.4302H35.7462V35.7533H46.8931L48.8284 21.6523H35.7462V19.4913C35.7462 17.7745 36.1904 16.4913 37.0611 15.677Z" fill="#750000" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2495_185">
                                            <rect width="60" height="60" fill="white" transform="translate(0.538086 0.430176)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <?php echo $facebook ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <div class="contact-infos--container--form">
            <?php echo do_shortcode('[contact-form-7 id="bd997a5" title="Contato"]');  ?>
        </div>
    </div>
</section>