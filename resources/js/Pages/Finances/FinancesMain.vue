<template>
    <Planmain
    :incomes="$page.props.incomes" 
    :futureIncomes="$page.props.futureIncomes" 
    :isAdmin="$page.props.isAdmin" 
    :userId="$page.props.userId"
    />
</template>

<script setup>
import Planmain from './Plan/PlanMain.vue'
defineProps({
  incomes: Object,
  futureIncomes: Array,
  isAdmin: Number,
  /*remove this one later, just for testing*/
  userId: Number,
})
</script>