@props(['services', 'current'])

{{-- ============ PRICING TABLE (compare all services) ============ --}}
<section class="bg-surface">
  <div class="mx-auto max-w-7xl px-6 py-20 lg:py-24">
    <div class="max-w-2xl">
      <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.18em] text-xs uppercase"><span class="w-7 h-px bg-accent"></span> ตารางราคา</span>
      <h2 class="mt-4 text-3xl lg:text-4xl font-bold tracking-tight text-navy-900 leading-tight">ราคาเริ่มต้น เทียบทุกบริการ</h2>
      <p class="mt-4 text-lg text-ink2 leading-relaxed">ราคาเริ่มต้นต่อหน่วยสำหรับเทียบเบื้องต้น — ราคาจริงประเมินตามหน้างานฟรี ไม่มีค่าใช้จ่าย</p>
    </div>

    <div class="mt-10 overflow-x-auto rounded-2xl border border-line bg-white">
      <table class="w-full min-w-[640px] text-left">
        <thead>
          <tr class="bg-navy-900 text-white text-[14px]">
            <th class="px-6 py-4 font-semibold">บริการ</th>
            <th class="px-6 py-4 font-semibold whitespace-nowrap">ราคาเริ่มต้น</th>
            <th class="px-6 py-4 font-semibold whitespace-nowrap">ระยะเวลางาน</th>
            <th class="px-6 py-4 font-semibold text-right">รายละเอียด</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-line text-[15px]">
          @foreach ($services as $key => $s)
            @php $here = $key === $current; @endphp
            <tr class="{{ $here ? 'bg-hivis/10' : 'hover:bg-surface' }} transition">
              <td class="px-6 py-4">
                <div class="flex items-center gap-3">
                  <span class="grid place-items-center w-9 h-9 rounded-lg bg-accent/8 text-accent shrink-0"><i class="bi {{ $s['icon'] }}"></i></span>
                  <span class="font-semibold text-navy-900">{{ $s['name'] }}@if ($here) <span class="ml-1 align-middle rounded-full bg-hivis/30 text-accent text-[11px] font-semibold px-2 py-0.5">หน้านี้</span>@endif</span>
                </div>
              </td>
              <td class="px-6 py-4 font-mono font-semibold text-navy-900 tabular-nums whitespace-nowrap">{{ $s['price'] }}</td>
              <td class="px-6 py-4 text-ink2 whitespace-nowrap">{{ $s['dur'] }}</td>
              <td class="px-6 py-4 text-right">
                <a href="{{ route('services.show', $key) }}" class="inline-flex items-center gap-1.5 text-accent font-semibold text-[14px] hover:gap-2.5 transition-all whitespace-nowrap">ดูบริการ <i class="bi bi-arrow-right"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <p class="mt-4 text-[13px] text-muted">* ราคายังไม่รวมงานพิเศษเฉพาะหน้างาน เช่น ระบบฐานรากพิเศษ การรื้อถอน หรือวัสดุเกรดสูงตามที่ลูกค้าเลือก</p>
  </div>
</section>
