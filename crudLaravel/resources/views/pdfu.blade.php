<style>
  body {
    font-family: Arial, sans-serif;
  }
  
  .min-w-full {
    width: 100%;
  }
  
  .bg-light-gray {
    background-color: #f2f2f2;
  }
  
  .border {
    border: 1px solid #e2e8f0;
  }
  
  .py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }
  
  .px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }
  
  table {
    border-collapse: collapse;
    width: 100%;
  }
  
  th, td {
    border: 1px solid #e2e8f0;
    padding: 8px;
    text-align: left;
  }
  
  th {
    background-color: #f2f2f2;
  }
  
  .actions {
    display: flex;
    justify-content: center;
    gap: 1rem;
  }
  
  .edit-btn {
    background-color: #3490dc;
    color: #fff;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s;
  }
  
  .edit-btn:hover {
    background-color: #1c6fd8;
  }
  
  .delete-form {
    margin: 0;
  }
  
  .delete-btn {
    background-color: #e53e3e;
    color: #fff;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .delete-btn:hover {
    background-color: #c53030;
  }
</style>

<table class="min-w-full bg-white border">
  <thead>
    <tr>
      <th class="py-2 px-4">ID</th>
      <th class="py-2 px-4">Nombre</th>
      <th class="py-2 px-4">Cedula</th>
      <th class="py-2 px-4">Teléfono</th>
      <th class="py-2 px-4">Dirección</th>
      <th class="py-2 px-4">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="py-2 px-4">{{ $usuario->id }}</td>
      <td class="py-2 px-4">{{ $usuario->nombre }}</td>
      <td class="py-2 px-4">{{ $usuario->cedula }}</td>
      <td class="py-2 px-4">{{ $usuario->telefono }}</td>
      <td class="py-2 px-4">{{ $usuario->direccion }}</td>
      <td class="py-2 px-4 actions">
        <a href="{{ route('users.edit', $usuario->id) }}" class="edit-btn">Editar</a>
        <form action="{{ route('users.destroy', $usuario->id) }}" method="POST" class="delete-form">
          @csrf
          @method('DELETE')
          <button type="submit" class="delete-btn">Eliminar</button>
        </form>
      </td>
    </tr>
  </tbody>
</table>
