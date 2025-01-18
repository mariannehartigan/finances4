<template>
    <form @input="update">
      <input v-model="form.month" type="text" :readonly="isAdmin === 0" />  
      <input v-model="form.day" type="text" :readonly="isAdmin === 0" />  
      <input v-model="form.year" type="text" :readonly="isAdmin === 0" />  
      <input v-model="form.description" type="text" :readonly="isAdmin === 0" />
      <input v-model="form.amount" type="text" :readonly="isAdmin === 0" />
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
const props = defineProps({
  actualFixedExpense: Object,
  isAdmin: Number,
  userId: Number,
})
const form = useForm({
  year: props.actualFixedExpense.year,
  month: props.actualFixedExpense.month,
  day: props.actualFixedExpense.day,
  description: props.actualFixedExpense.description,
  amount: props.actualFixedExpense.amount,
  })
const update = () => {
    if(props.isAdmin===1) {
      form.put(`/actualFixedExpenses/${props.actualFixedExpense.id}`, {preserveScroll:true})
    }
  }
</script>
