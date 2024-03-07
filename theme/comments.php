<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both
 * the current comments and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thestartutor
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

				<section class="w-full px-[350px] mt-[76px]">
            <h2 class="text-heading2 font-heading2">Comments (24)</h2>
            <div class="flex py-[24px] px-[24px] gap-[8px]">
                <div class="w-[40px] h-[40px] bg-[url('./src/images/user.jpg')] bg-center bg-cover rounded-full"></div>
                <input class="h-[40px] outline-none w-full bg-surface-secondary resize-none rounded-full indent-[10px]" placeholder="Write a comment" />
            </div>
            <hr>
            <div>
                <div class="flex flex-col py-[24px] px-[24px] gap-[8px]">
                    <div class="flex gap-[7px]">
                        <div class="w-[40px] h-[40px] bg-[url('./src/images/user1.jpg')] bg-center bg-cover rounded-full"></div>
                        <div class="flex flex-col">
                            <span class="text-semibold font-semibold">Sam W</span>
                            <span class="text-captionSmall font-captionSmall">15 Dec 2023</span>
                        </div>
                    </div>
                    <div>
                        Thanks so much for including my article! I greatly appreciate your support!! &lt;3
                    </div>
                    <div class="mt-[10px] flex items-center gap-[16px]">
                        <div class="flex items-center gap-[4px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-captionBig font-captionBig text-secondary">3 Replies</span>
                        </div>
                        <div class="flex items-center gap-[4px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4.7918 7.84375H3.80555C2.98851 7.84375 2.32617 8.50613 2.32617 9.32313V16.2269C2.32617 17.044 2.98851 17.7063 3.80555 17.7063H4.7918C5.60884 17.7063 6.27118 17.044 6.27118 16.2269V9.32313C6.27118 8.50613 5.60884 7.84375 4.7918 7.84375Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.6331 10.2L16.4496 16.1175C16.3594 16.5716 16.1124 16.9795 15.7518 17.2697C15.3911 17.5601 14.94 17.7142 14.4771 17.7054H8.24398C7.72085 17.7054 7.21913 17.4976 6.84922 17.1276C6.4793 16.7577 6.27148 16.256 6.27148 15.7329V9.8154C6.28733 9.43556 6.38341 9.06348 6.55339 8.72348C6.72338 8.38356 6.96343 8.0834 7.25773 7.84286L8.07633 2.9116C8.09478 2.79656 8.14014 2.68751 8.20873 2.59332C8.27732 2.49914 8.36722 2.42249 8.47097 2.36961C8.5748 2.31674 8.68963 2.28914 8.80622 2.28906C8.92272 2.28899 9.03755 2.31643 9.14147 2.36916L10.0587 2.82285C10.6646 3.12245 11.1498 3.62055 11.4333 4.23423C11.7168 4.84791 11.7816 5.54017 11.617 6.19582L11.2027 7.833H15.7001C15.9926 7.83294 16.2815 7.89794 16.5457 8.0233C16.8101 8.14867 17.0432 8.33123 17.2282 8.55781C17.4132 8.7844 17.5455 9.04931 17.6156 9.33331C17.6856 9.61731 17.6916 9.9134 17.6331 10.2Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-captionBig font-captionBig text-secondary">24 Likes</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col py-[24px] px-[24px] gap-[8px]">
                    <div class="flex gap-[7px]">
                        <div class="w-[40px] h-[40px] bg-[url('./src/images/user1.jpg')] bg-center bg-cover rounded-full"></div>
                        <div class="flex flex-col">
                            <span class="text-semibold font-semibold">Michael J</span>
                            <span class="text-captionSmall font-captionSmall">15 Dec 2023</span>
                        </div>
                    </div>
                    <div>
                        Indeed, and I've got some thoughts, at least when it comes to AI writing in museums!
                    </div>
                    <div class="mt-[10px] flex items-center gap-[16px]">
                        <div class="flex items-center gap-[4px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-captionBig font-captionBig text-secondary">3 Replies</span>
                        </div>
                        <div class="flex items-center gap-[4px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4.7918 7.84375H3.80555C2.98851 7.84375 2.32617 8.50613 2.32617 9.32313V16.2269C2.32617 17.044 2.98851 17.7063 3.80555 17.7063H4.7918C5.60884 17.7063 6.27118 17.044 6.27118 16.2269V9.32313C6.27118 8.50613 5.60884 7.84375 4.7918 7.84375Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.6331 10.2L16.4496 16.1175C16.3594 16.5716 16.1124 16.9795 15.7518 17.2697C15.3911 17.5601 14.94 17.7142 14.4771 17.7054H8.24398C7.72085 17.7054 7.21913 17.4976 6.84922 17.1276C6.4793 16.7577 6.27148 16.256 6.27148 15.7329V9.8154C6.28733 9.43556 6.38341 9.06348 6.55339 8.72348C6.72338 8.38356 6.96343 8.0834 7.25773 7.84286L8.07633 2.9116C8.09478 2.79656 8.14014 2.68751 8.20873 2.59332C8.27732 2.49914 8.36722 2.42249 8.47097 2.36961C8.5748 2.31674 8.68963 2.28914 8.80622 2.28906C8.92272 2.28899 9.03755 2.31643 9.14147 2.36916L10.0587 2.82285C10.6646 3.12245 11.1498 3.62055 11.4333 4.23423C11.7168 4.84791 11.7816 5.54017 11.617 6.19582L11.2027 7.833H15.7001C15.9926 7.83294 16.2815 7.89794 16.5457 8.0233C16.8101 8.14867 17.0432 8.33123 17.2282 8.55781C17.4132 8.7844 17.5455 9.04931 17.6156 9.33331C17.6856 9.61731 17.6916 9.9134 17.6331 10.2Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-captionBig font-captionBig text-secondary">24 Likes</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <button class="flex flex-col py-[24px] px-[24px] gap-[8px]">See more comments...</button>
        </section>