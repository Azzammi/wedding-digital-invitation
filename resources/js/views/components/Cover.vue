<template>
    <div>
        <div class="bg-image tw-h-96">
            <div class="tw-h-48"></div>
        </div>
        <div class="bg-text">
            <div class="outer-cover tw-px-2.5 tw-pt-5 tw-pb-16">
                <div class="tw-p-2">
                    <p class="tw-font-light tw-text-sm lg:tw-text-md lg:tw-font-normal tw-text-center uk-scrollspy-inview"
                        style="letter-spacing: 3px; color:#ffffffb3;">WEDDING INVITATION</p>
                    <div class="tw-h-40"></div>
                    <div class="tw-py-4">
                        <h2 class="tw-text-4xl lg:tw-text-5xl tw-text-center tw-font-light uk-scrollspy-inview">Sulis &
                            Luthfi</h2>
                    </div>
                    <p class="tw-text-center tw-font-light tw-text-xs lg:tw-text-lg lg:tw-font-normal uk-scrollspy-inview"
                        style="color: #bdaa8b; letter-spacing: 3px;">12.02.2023</p>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {

}
</script>

<style>
.bg-image {
    /* The image used */
    background-image: url('../../../assets/img/cover-main-2.jpg');

    /* Add the blur effect */
    filter: blur(8px);
    -webkit-filter: blur(2px);

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 100%;
    padding: 20px;
    text-align: center;
}
</style>
