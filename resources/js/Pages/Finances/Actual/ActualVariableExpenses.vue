<template>
    <form @input="update">
      <input v-model="form.description" type="text" :readonly="isAdmin === 0" />
      <input v-model="form.amount" type="text" :readonly="isAdmin === 0" />
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
const props = defineProps({
  actualVariableExpense: Object,
  isAdmin: Number,
  userId: Number,
})
const form = useForm({
  description: props.actualVariableExpense.description,
  amount: props.actualVariableExpense.amount,
  })
const update = () => {
    if(props.isAdmin===1) {
      form.put(`/actualVariableExpenses/${props.actualVariableExpense.id}`, {preserveScroll:true})
    }
  }
</script>