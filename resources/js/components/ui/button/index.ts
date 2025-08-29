import { cva, type VariantProps } from 'class-variance-authority'

export { default as Button } from './Button.vue'

export const buttonVariants = cva(
  'inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*=\'size-\'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive',
  {
    variants: {
      variant: {
        default:
        'bg-white text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded-xl shadow gap-2hover:scale-105 hover:border-2 hover:border-turquesaBtnBorder hover:bg-turquesaBtnBg hover:text-white  transition-transform duration-300 ease-in-out hover:shadow-[0_0_25px_5px_rgba(34,211,238,0.5)]',
        destructive:
          'flex bg-white text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded-xl shadow gap-2 hover:scale-105 hover:border-2 hover:border-turquesaBtnBorder hover:bg-turquesaBtnBg hover:text-white  transition-transform duration-300 ease-in-out hover:shadow-[0_0_25px_5px_rgba(34,211,238,0.5)]',
           outline:
          'border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50',
        secondary:
          'flex bg-white text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded-xl shadow gap-2 hover:scale-105 hover:border-2 hover:border-turquesaBtnBorder hover:bg-turquesaBtnBg hover:text-white  transition-transform duration-300 ease-in-out hover:shadow-[0_0_25px_5px_rgba(34,211,238,0.5)]',
        ghost:
          'hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50',
        link: 'text-primary underline-offset-4 hover:underline',
      },
      size: {
        default: 'h-9 p-5 has-[>svg]:px-3',
        sm: 'h-8 rounded-md gap-1.5 px-3 has-[>svg]:px-2.5',
        lg: 'h-10 rounded-md px-6 has-[>svg]:px-4',
        icon: 'size-9',
      },
    },
    defaultVariants: {
      variant: 'default',
      size: 'default',
    },
  },
)

export type ButtonVariants = VariantProps<typeof buttonVariants>
