 
    <div>
        @if ($status)
            <div class="alert alert-success">{{ $status }}</div>
        @endif
        @if ($error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endif
    
        <form wire:submit.prevent="resetPassword">
            <input type="hidden" wire:model="token">
            <div class="mb-3">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" id="email" wire:model="email" class="form-control">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="password">كلمة المرور الجديدة</label>
                <input type="password" id="password" wire:model="password" class="form-control">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation">تأكيد كلمة المرور</label>
                <input type="password" id="password_confirmation" wire:model="password_confirmation" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">تغيير كلمة المرور</button>
        </form>
    </div>
    
 
