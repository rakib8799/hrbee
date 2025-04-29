<template>
<div class="py-10 py-lg-20">
    <div class="container">
        <div class="text-center mb-12">
            <h3 class="fs-2hx text-gray-900 mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Our Great Team</h3>
            <div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer to complete, additional costs to<br />integrate and test each extra feature creeps up and haunts most of us.</div>
        </div>
        <TeamSlider :team="teamData" />
    </div>
</div>
</template>
  
<script setup>
import TeamSlider from '@/Pages/Home/Team/TeamSlider.vue';

const teamData = [{
        name: 'Paul Miles',
        position: 'Development Lead',
        photoUrl: '/media/avatars/300-1.jpg',
        profileUrl: '#'
    },
    {
        name: 'Melisa Marcus',
        position: 'Creative Director',
        photoUrl: '/media/avatars/300-2.jpg',
        profileUrl: '#'
    },
    {
        name: 'David Nilson',
        position: 'Python Expert',
        photoUrl: '/media/avatars/300-5.jpg',
        profileUrl: '#'
    },
    {
        name: 'Anne Clarc',
        position: 'Project Manager',
        photoUrl: '/media/avatars/300-20.jpg',
        profileUrl: '#'
    },
    {
        name: 'Ricky Hunt',
        position: 'Art Director',
        photoUrl: '/media/avatars/300-23.jpg',
        profileUrl: '#'
    },
    {
        name: 'Alice Wayde',
        position: 'Marketing Manager',
        photoUrl: '/media/avatars/300-12.jpg',
        profileUrl: '#'
    },
    {
        name: 'Carles Puyol',
        position: 'QA Manager',
        photoUrl: '/media/avatars/300-9.jpg',
        profileUrl: '#'
    }
];
</script>

