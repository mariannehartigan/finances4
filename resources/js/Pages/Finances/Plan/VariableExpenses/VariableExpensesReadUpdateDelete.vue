<template>
    <form @input="update" style="color: red;">
  
      <input v-model="form.description" type="text" :readonly="isAdmin === 0" />
      <input v-model="form.amount" type="text" :readonly="isAdmin === 0" />
      <select v-model="form.frequency" :disabled="isAdmin === 0" >
        <option>Daily</option>
        <option>Weekly</option>
        <option>Biweekly</option>
        <option>Bimonthly</option>
        <option>Monthly</option>
        <option>Quarterly</option>
        <option>Yearly</option>
      </select>
      <input v-model="form.notes" type="text" :readonly="isAdmin === 0" />  
  
    </form>
    <Link v-if="isAdmin" :href="`/variableExpenses/${props.variableExpense.id}`" method="DELETE" as="button" preserve-scroll>&nbsp Delete</Link>
    <br />
  </template>
  
  <script setup>
    import { useForm } from '@inertiajs/vue3'
    import { Link } from '@inertiajs/vue3'
    const props = defineProps({
      variableExpense: Object,
      isAdmin: Number,
    })
    const form = useForm({
      description: props.variableExpense.description,
      amount: props.variableExpense.amount,
      frequency: props.variableExpense.frequency,
      notes: props.variableExpense.notes,
    })
    const update = () => {
      if(props.isAdmin===1) {
        form.put(`/variableExpenses/${props.variableExpense.id}`, {preserveScroll:true})
      }
    }
  </script>