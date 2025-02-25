interface PaginationProps {
  selectedIndex: number
  slides: number
  onDotClick: (index: number) => void
}

export default function Pagination({ selectedIndex, slides, onDotClick }: PaginationProps) {
  return (
    <div className="flex justify-center gap-2 mt-4">
      {Array.from({ length: slides }).map((_, index) => (
        <button
          key={index}
          type="button"
          className={`w-3 h-3 rounded-full transition-all duration-200 ${
            index === selectedIndex 
              ? 'bg-orange' 
              : 'bg-grey hover:bg-orange'
          }`}
          onClick={() => onDotClick(index)}
          aria-label={`Go to slide ${index + 1}`}
        />
      ))}
    </div>
  )
} 