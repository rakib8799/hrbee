<template>
<div class="tns tns-default" style="direction: ltr">
    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
        <TeamMember v-for="(member, index) in team" :key="index" :name="member.name" :position="member.position" :photo-url="member.photoUrl" :profile-url="member.profileUrl" />
    </div>
    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
        <i class="ki-duotone ki-left fs-2x"></i>
    </button>
    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
        <i class="ki-duotone ki-right fs-2x"></i>
    </button>
</div>
</template>

<script setup>
import TeamMember from '@/Pages/Home/Team/TeamMember.vue';

const props = defineProps({
    team: Array
});
</script>
