
import type { Config } from "tailwindcss";

export default {
	darkMode: ["class"],
	content: [
		"./pages/**/*.{ts,tsx}",
		"./components/**/*.{ts,tsx}",
		"./app/**/*.{ts,tsx}",
		"./src/**/*.{ts,tsx}",
	],
	prefix: "",
	theme: {
		container: {
			center: true,
			padding: '2rem',
			screens: {
				'2xl': '1400px'
			}
		},
		extend: {
			fontFamily: {
				'cinzel': ['Cinzel', 'serif'],
				'playfair': ['Playfair Display', 'serif'],
				'lato': ['Lato', 'sans-serif'],
			},
			colors: {
				// Divine Olympic Color Palette
				'gold': '#B8860B',
				'gold-accent': '#FFD700',
				'navy': '#0D1B2A',
				'neutral-light': '#F2F1ED',
				
				// Keep existing system colors
				border: 'hsl(var(--border))',
				input: 'hsl(var(--input))',
				ring: 'hsl(var(--ring))',
				background: 'hsl(var(--background))',
				foreground: 'hsl(var(--foreground))',
				primary: {
					DEFAULT: 'hsl(var(--primary))',
					foreground: 'hsl(var(--primary-foreground))'
				},
				secondary: {
					DEFAULT: 'hsl(var(--secondary))',
					foreground: 'hsl(var(--secondary-foreground))'
				},
				destructive: {
					DEFAULT: 'hsl(var(--destructive))',
					foreground: 'hsl(var(--destructive-foreground))'
				},
				muted: {
					DEFAULT: 'hsl(var(--muted))',
					foreground: 'hsl(var(--muted-foreground))'
				},
				accent: {
					DEFAULT: 'hsl(var(--accent))',
					foreground: 'hsl(var(--accent-foreground))'
				},
				popover: {
					DEFAULT: 'hsl(var(--popover))',
					foreground: 'hsl(var(--popover-foreground))'
				},
				card: {
					DEFAULT: 'hsl(var(--card))',
					foreground: 'hsl(var(--card-foreground))'
				},
				sidebar: {
					DEFAULT: 'hsl(var(--sidebar-background))',
					foreground: 'hsl(var(--sidebar-foreground))',
					primary: 'hsl(var(--sidebar-primary))',
					'primary-foreground': 'hsl(var(--sidebar-primary-foreground))',
					accent: 'hsl(var(--sidebar-accent))',
					'accent-foreground': 'hsl(var(--sidebar-accent-foreground))',
					border: 'hsl(var(--sidebar-border))',
					ring: 'hsl(var(--sidebar-ring))'
				}
			},
			backgroundImage: {
				'hero-gradient': 'linear-gradient(135deg, rgba(184,134,11,0.95), rgba(13,27,42,0.9), rgba(255,215,0,0.1))',
				'section-gradient': 'linear-gradient(to bottom, rgba(242,241,237,0.8), rgba(255,255,255,0.9), rgba(255,215,0,0.05))',
				'divine-gradient': 'linear-gradient(135deg, rgba(255,215,0,0.1), rgba(184,134,11,0.2), rgba(255,215,0,0.1))',
			},
			borderRadius: {
				lg: 'var(--radius)',
				md: 'calc(var(--radius) - 2px)',
				sm: 'calc(var(--radius) - 4px)'
			},
			borderWidth: {
				'3': '3px',
			},
			keyframes: {
				'accordion-down': {
					from: {
						height: '0'
					},
					to: {
						height: 'var(--radix-accordion-content-height)'
					}
				},
				'accordion-up': {
					from: {
						height: 'var(--radix-accordion-content-height)'
					},
					to: {
						height: '0'
					}
				},
				'fade-in': {
					'0%': {
						opacity: '0',
						transform: 'translateY(30px)'
					},
					'100%': {
						opacity: '1',
						transform: 'translateY(0)'
					}
				},
				'scale-in': {
					'0%': {
						transform: 'scale(0.9) translateY(20px)',
						opacity: '0'
					},
					'100%': {
						transform: 'scale(1) translateY(0)',
						opacity: '1'
					}
				},
				'spin-slow': {
					'0%': {
						transform: 'rotate(0deg)'
					},
					'100%': {
						transform: 'rotate(360deg)'
					}
				},
				'glow-pulse': {
					'0%, 100%': {
						boxShadow: '0 0 20px rgba(255,215,0,0.4)'
					},
					'50%': {
						boxShadow: '0 0 40px rgba(255,215,0,0.8)'
					}
				},
				'divine-float': {
					'0%, 100%': {
						transform: 'translateY(0px) rotate(0deg)'
					},
					'50%': {
						transform: 'translateY(-10px) rotate(5deg)'
					}
				}
			},
			animation: {
				'accordion-down': 'accordion-down 0.2s ease-out',
				'accordion-up': 'accordion-up 0.2s ease-out',
				'fade-in': 'fade-in 0.8s ease-out',
				'scale-in': 'scale-in 0.6s ease-out',
				'spin-slow': 'spin-slow 8s linear infinite',
				'glow-pulse': 'glow-pulse 2s ease-in-out infinite',
				'divine-float': 'divine-float 4s ease-in-out infinite',
			},
			boxShadow: {
				'divine': '0 0 50px rgba(255,215,0,0.3)',
				'divine-lg': '0 0 80px rgba(255,215,0,0.4)',
				'divine-xl': '0 0 120px rgba(255,215,0,0.5)',
			},
			textShadow: {
				'divine': '0 0 20px rgba(255,215,0,0.6)',
				'lg': '2px 2px 4px rgba(0,0,0,0.3)',
			}
		}
	},
	plugins: [
		require("tailwindcss-animate"),
		function({ addUtilities }: any) {
			const newUtilities = {
				'.text-shadow-divine': {
					textShadow: '0 0 20px rgba(255,215,0,0.6)',
				},
				'.text-shadow-lg': {
					textShadow: '2px 2px 4px rgba(0,0,0,0.3)',
				},
				'.animation-delay-1s': {
					animationDelay: '1s',
				},
				'.animation-delay-2s': {
					animationDelay: '2s',
				},
				'.animation-delay-3s': {
					animationDelay: '3s',
				},
			}
			addUtilities(newUtilities)
		}
	],
} satisfies Config;
