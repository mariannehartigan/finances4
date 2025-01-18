<template>
    <form v-if="isAdmin === 1" @submit.prevent="create">
      <div>
          <input v-model="form.description" type="text" placeholder="New Income"/>
          <input v-model="form.amount" type="text" placeholder="Amount"/>
          <input v-model="form.day_deposited" type="text" placeholder="Day Deposited"/>
        <select v-model="form.frequency">
          <option>Biweekly</option>
          <option>Bimonthly</option>
          <option>Monthly</option>
          <option>Quarterly</option>
          <option>Yearly</option>
        </select>
        <input v-model="form.notes" type="text" placeholder="notes"/>
        <div style="display: inline-block">
          <button type="submit">&nbsp;+</button>
        </div>
      </div>
    </form>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  defineProps({
    incomes: Object,
    isAdmin: Number,
    userId: Number,
  })
  const form = useForm({
    description: null,
    amount: null,
    day_deposited: null,
    frequency: "Biweekly",
    notes: null
    })
  const create = () => {
    form.post('/income',  {preserveScroll:true});
    form.description = "";
    form.amount = "";
    form.frequency = "Biweekly";
    form.day_deposited = "";
    form.notes = "";
  }
  </script>
  