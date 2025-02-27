'use client'

import useEmblaCarousel from 'embla-carousel-react'
import type { EmblaOptionsType } from 'embla-carousel'
import { useCallback, useEffect, useState } from 'react'
import Pagination from './pagination'

interface CarouselImage {
  src: string
  alt: string
}

interface CarouselProps {
  images: CarouselImage[]
  options?: EmblaOptionsType
  className?: string
}

const PARALLAX_FACTOR = 1.2

export default function Carousel({ 
  images, 
  options = {
    align: 'start',
    loop: true,
  },
  className = ''
}: CarouselProps) {
  const [emblaRef, emblaApi] = useEmblaCarousel(options)
  const [selectedIndex, setSelectedIndex] = useState(0)
  const [parallaxValues, setParallaxValues] = useState<number[]>([])

  const onScroll = useCallback(() => {
    if (!emblaApi) return

    const engine = emblaApi.internalEngine()
    const scrollProgress = emblaApi.scrollProgress()

    const styles = emblaApi.scrollSnapList().map((scrollSnap, index) => {
      let diffToTarget = scrollSnap - scrollProgress

      if (engine.options.loop) {
        engine.slideLooper.loopPoints.forEach((loopItem) => {
          const target = loopItem.target()
          if (index === loopItem.index && target !== 0) {
            const sign = Math.sign(target)
            if (sign === -1) diffToTarget = scrollSnap - (1 + scrollProgress)
            if (sign === 1) diffToTarget = scrollSnap + (1 - scrollProgress)
          }
        })
      }
      return diffToTarget * (-1 * PARALLAX_FACTOR * 100)
    })
    setParallaxValues(styles)
  }, [emblaApi])

  useEffect(() => {
    if (!emblaApi) return

    const onSelect = () => {
      setSelectedIndex(emblaApi.selectedScrollSnap())
    }

    emblaApi.on('select', onSelect)
    emblaApi.on('scroll', onScroll)
    onSelect()
    onScroll()

    return () => {
      emblaApi.off('select', onSelect)
      emblaApi.off('scroll', onScroll)
    }
  }, [emblaApi, onScroll])

  const scrollTo = useCallback(
    (index: number) => {
      emblaApi?.scrollTo(index)
    },
    [emblaApi]
  )

  return (
    <div className="relative">
      <div className={`overflow-hidden ${className}`} ref={emblaRef}>
        <div className="flex touch-pan-y">
          {images.map((image, index) => (
            <div
              className="flex-[0_0_100%] min-w-0 relative"
              key={index}
            >
              <div className="relative overflow-hidden">
                <div
                  className="w-[110%] -ml-[5%]"
                  style={{
                    transform: `translateX(${parallaxValues[index]}%)`,
                  }}
                >
                  <img
                    className="w-full h-auto block"
                    src={image.src}
                    alt={image.alt}
                  />
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
      
      <Pagination 
        selectedIndex={selectedIndex}
        slides={images.length}
        onDotClick={scrollTo}
      />
    </div>
  )
} 