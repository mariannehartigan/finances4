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
  actualIncome: Object,
  isAdmin: Number,
  userId: Number,
})
const form = useForm({
  year: props.actualIncome.year,
  month: props.actualIncome.month,
  day: props.actualIncome.day,
  description: props.actualIncome.description,
  amount: props.actualIncome.amount,
  })
const update = () => {
    if(props.isAdmin===1) {
      form.put(`/actualIncome/${props.actualIncome.id}`, {preserveScroll:true})
    }
  }
</script>
